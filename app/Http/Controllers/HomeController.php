<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use App\Models\Tag;
use App\Models\Tahun;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $peraturanTerbaru = Peraturan::query()->latest()->take(4)->get();
        $peraturans = Peraturan::query()->get();
        $tagPeraturans = Tag::query()->get();
        $tahuns = Tahun::query()->orderBy('tahun', 'desc')->get();
        $peraturanPopuler = Peraturan::mostPopularProducts()->take(4);
        $sumbers = User::query()->where('username', '!=', 'administrator')->get();

        return response()->view('pages.users.index', [
            'peraturans' => $peraturans,
            'tagPeraturans' => $tagPeraturans,
            'peraturanTerbarus' => $peraturanTerbaru,
            'peraturanTerpopulers' => $peraturanPopuler,
            'tahuns' => $tahuns,
            'sumbers' => $sumbers,
        ]);
    }

    public function subjek(Request $request): Response
    {
        if ($request->input('keyword')) {
            $keyword = $request->input('keyword');
            $tagPeraturans = Tag::query()->where('nama', 'like', '%'.$keyword.'%')->get();
        } else {
            $tagPeraturans = Tag::query()->get();
        }

        return response()->view('pages.users.subjek.index', [
            'tagPeraturans' => $tagPeraturans,
        ]);
    }

    public function sumber(Request $request): Response
    {
        if ($request->input('keyword')) {
            $keyword = $request->input('keyword');
            $sumberDokumen = User::query()->where('username', 'like', '%'.$keyword.'%')->get();
        } else {
            $sumberDokumen = User::query()->where('username', '!=', 'administrator')->get();
        }

        return response()->view('pages.users.sumber.index', [
            'sumberDokumens' => $sumberDokumen,
        ]);
    }

    public function tahun(): Response
    {
        $tahuns = Tahun::query()->orderBy('tahun', 'desc')->get();

        return response()->view('pages.users.tahun.index', [
            'tahuns' => $tahuns,
        ]);
    }

    public function detail(string $id, string $slug, Request $request): Response
    {
        $peraturan = Peraturan::query()->where('id', $id)->orWhere('slug', $slug)->first();

        if (! $request->input('password')) {
            return response()->view('pages.users.detail.index', [
                'peraturan' => $peraturan,
            ]);
        }

        if ($peraturan->password->password == $request->input('password')) {
            return response()->view('pages.users.detail.index', [
                'peraturan' => $peraturan,
                'password' => $request->input('password'),
            ]);
        } else {
            return response()->view('pages.users.detail.index', [
                'peraturan' => $peraturan,
                'error' => 'password salah',
            ]);
        }

    }

    public function search(Request $request): Response
    {

        $query = Peraturan::query();

        // Jika request mengandung keyword, tentang, nomor, tahun, atau tag
        if ($request->filled(['keyword', 'tentang', 'nomor', 'tahun', 'tag'])) {
            // Membuat klausa where untuk query
            $query->where(function ($q) use ($request) {
                // Memeriksa apakah request mengandung keyword
                if ($request->filled('keyword')) {
                    // Mengambil nilai keyword dari request
                    $keyword = $request->input('keyword');
                    // Membuat kondisi where untuk mencari berdasarkan keyword
                    $q->where(function ($q) use ($keyword) {
                        $q->where('deskripsi', 'like', '%'.$keyword.'%')
                            ->orWhere('nama', 'like', '%'.$keyword.'%')
                            ->orWhere('nomor', 'like', '%'.$keyword.'%')
                            ->orWhere('tipe_dokumen', 'like', '%'.$keyword.'%')
                            ->orWhere('judul', 'like', '%'.$keyword.'%')
                            ->orWhere('tempat_penetapan', 'like', '%'.$keyword.'%')
                            ->orWhere('tanggal_penetapan', 'like', '%'.$keyword.'%')
                            ->orWhere('tanggal_pengundangan', 'like', '%'.$keyword.'%')
                            ->orWhere('tanggal_berlaku', 'like', '%'.$keyword.'%')
                            ->orWhere('jumlah_halaman', 'like', '%'.$keyword.'%')
                            ->orWhere('status', 'like', '%'.$keyword.'%')
                            ->orWhere('bahasa', 'like', '%'.$keyword.'%')
                            ->orWhere('lokasi', 'like', '%'.$keyword.'%')
                            ->orWhere('teu', 'like', '%'.$keyword.'%')
                            ->orWhere('bidang', 'like', '%'.$keyword.'%')
                            ->orWhere('status_hukum', 'like', '%'.$keyword.'%');
                    });
                }
                // Memeriksa apakah request mengandung tentang
                if ($request->filled('tentang')) {
                    $tentang = $request->input('tentang');
                    // Menggunakan orWhere untuk menambahkan kondisi pencarian "tentang" pada kolom "nama"
                    $q->orWhere('nama', 'like', '%'.$tentang.'%');
                }

                // Memeriksa apakah request mengandung nomor
                if ($request->filled('nomor')) {
                    $nomor = $request->input('nomor');
                    $q->orWhere('nomor', 'like', '%'.$nomor.'%');
                }

                // Memeriksa apakah request mengandung tag
                if ($request->filled('tag')) {
                    $tags = is_array($request->input('tag')) ? $request->input('tag') : [$request->input('tag')];
                    $q->whereHas('tagPeraturans', function ($q) use ($tags) {
                        // whereIn adalah klausa yang digunakan untuk memeriksa apakah nilai kolom ada dalam array nilai yang diberikan
                        $q->whereIn('nama', $tags);
                    });
                }

                // Memeriksa apakah request mengandung tahun
                if ($request->filled('tahun')) {
                    $tahun = is_array($request->input('tahun')) ? $request->input('tahun') : [$request->input('tahun')];
                    if (is_array($tahun)) {
                        $q->whereHas('tahuns', function ($q) use ($tahun) {
                            $q->whereIn('tahun', $tahun);
                        });
                    } else {
                        $q->whereHas('tahuns', function ($q) use ($tahun) {
                            $q->where('tahun', $tahun);
                        });
                    }
                }
            });
        }

        // Search by 'tahun' in 'tahuns' table
        if ($request->filled('tahun')) {
            $tahun = $request->input('tahun');
            if (is_array($tahun)) {
                $query->whereHas('tahuns', function ($q) use ($tahun) {
                    $q->whereIn('tahun', $tahun);
                });
            } else {
                $query->whereHas('tahuns', function ($q) use ($tahun) {
                    $q->where('tahun', $tahun);
                });
            }
        }

        // Search by 'nomor'
        if ($request->filled('nomor')) {
            $nomor = $request->input('nomor');
            $query->where('nomor', 'like', '%'.$nomor.'%');
        }

        // Filter by 'tag' using relation with 'tagPeraturans'
        if ($request->filled('tag')) {
            $tags = is_array($request->input('tag')) ? $request->input('tag') : [$request->input('tag')];
            $query->whereHas('tagPeraturans', function ($q) use ($tags) {
                $q->whereIn('nama', $tags);
            });
        }

        // Filter by 'user' using 'tipe_dokumen'
        if (($request->input('sumber'))) {
            // dd($request->input("user"));
            $user = $request->input('sumber');
            $query->whereHas('user', function ($q) use ($user) {
                $q->where('username', $user);
            });
        }

        // Apply sorting and pagination for better performance and usability
        $peraturanPencarians = $query->orderBy('updated_at', 'desc')->paginate(6)->withQueryString();
        //   dd($peraturans);
        $peraturans = Peraturan::query()->get();
        $tagPeraturans = Tag::query()->get();
        $tahuns = Tahun::query()->orderBy('tahun', 'desc')->get();
        $sumbers = User::query()->where('username', '!=', 'administrator')->get();

        return response()->view('pages.users.index', [
            'peraturans' => $peraturans,
            'tagPeraturans' => $tagPeraturans,
            'peraturanPencarians' => $peraturanPencarians,
            'peraturans' => $peraturans,
            'tahuns' => $tahuns,
            'sumbers' => $sumbers,
        ]);
    }

    public function download(string $id, string $file)
    {

        $produk = Peraturan::query()->where('id', $id)->first();
        if ($produk) {
            if ($produk->download === null) {
                $produk->download = 1;
            } else {
                $produk->increment('download');
            }
            $produk->save();
        }
        $filePath = storage_path('app/document/'.$file);
        if (! file_exists($filePath)) {
            return redirect()->back()->withErrors(['error' => 'The file does not exist.']);
        }

        return response()->download($filePath);
    }

    public function review(string $id, string $file)
    {

        $produk = Peraturan::query()->where('id', $id)->first();
        if ($produk) {
            if ($produk->review === null) {
                $produk->review = 1;
            } else {
                $produk->increment('review');
            }
            $produk->save();
        }
        $filePath = storage_path('app/document/'.$file);
        if (! file_exists($filePath)) {
            return redirect()->back()->withErrors(['error' => 'The file does not exist.']);
        }

        return response()->file($filePath);
    }
}
