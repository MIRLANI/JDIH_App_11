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

        $jmlPeraturanAktif =  Peraturan::query()->where('status', 'berlaku')->count();

        $jmlPeraturanTidakAktif = Peraturan::query()->where('status', 'tidak berlaku')->count();


        return response()->view('pages.users.index', [
            'peraturans' => $peraturans,
            'tagPeraturans' => $tagPeraturans,
            'peraturanTerbarus' => $peraturanTerbaru,
            'peraturanTerpopulers' => $peraturanPopuler,
            'tahuns' => $tahuns,
            'sumbers' => $sumbers,
            'jmlPeraturanAktif' => $jmlPeraturanAktif,
            'jmlPeraturanTidakAktif' => $jmlPeraturanTidakAktif
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
                'error' => 'Mohon maaf password yang dimasukkan salah!',
            ]);
        }

    }

    public function search(Request $request): Response
    {
        $query = Peraturan::query();

        // Membuat klausa where untuk query
        $query->where(function ($q) use ($request) {
            // Memeriksa apakah request mengandung keyword
            if ($request->filled('keyword')) {
                $keyword = $request->input('keyword');
                
                $q->where(function ($q) use ($keyword) {
                    $q->where('deskripsi', 'like', '%'.$keyword.'%')
                        ->orWhere('nama', 'like', '%'.$keyword.'%')
                        ->orWhere('nomor', 'like', '%'.$keyword.'%')
                        ->orWhere('judul', 'like', '%'.$keyword.'%')
                        ->orWhere('tempat_penetapan', 'like', '%'.$keyword.'%')
                        ->orWhere('tanggal_penetapan', 'like', '%'.$keyword.'%')
                        ->orWhere('tanggal_pengundangan', 'like', '%'.$keyword.'%')
                        ->orWhere('tanggal_berlaku', 'like', '%'.$keyword.'%')
                        ->orWhere('jumlah_halaman', 'like', '%'.$keyword.'%')
                        ->orWhere('bahasa', 'like', '%'.$keyword.'%')
                        ->orWhere('lokasi', 'like', '%'.$keyword.'%')
                        ->orWhere('teu', 'like', '%'.$keyword.'%')
                        ->orWhere('bidang', 'like', '%'.$keyword.'%');
                });
            }

            if ($request->filled('tentang')) {
                $tentang = $request->input('tentang');
                $q->where('nama', 'like', '%'.$tentang.'%');
            }

            if ($request->filled('status')) {
                $status = $request->input('status');
                $q->where('status', 'like', '%'.$status.'%');
            }

            if ($request->filled('sumber')) {
                $sumber = $request->input('sumber');
                $q->whereHas('user', function ($q) use ($sumber) {
                    $q->where('username', 'like', '%'.$sumber.'%');
                });
            }

            if ($request->filled('tahun')) {
                $tahun = is_array($request->input('tahun')) ? $request->input('tahun') : [$request->input('tahun')];
                $q->whereHas('tahuns', function ($q) use ($tahun) {
                    $q->whereIn('tahun', $tahun);
                });
            }

            if ($request->filled('tag')) {
                $tags = is_array($request->input('tag')) ? $request->input('tag') : [$request->input('tag')];
                $q->whereHas('tagPeraturans', function ($q) use ($tags) {
                    $q->whereIn('nama', $tags);
                });
            }
        });

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
