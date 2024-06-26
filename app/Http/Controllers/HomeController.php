<?php

namespace App\Http\Controllers;

use App\Models\CategoryHukum;
use App\Models\ProductHukum;
use App\Models\SubjekHukum;
use App\Models\Tahun;
use App\Models\TipeHukum;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $produkHukumHukumsTerbaru = ProductHukum::query()->latest()->take(4)->get();
        $produkHukums = ProductHukum::query()->get();
        $subjekHukums = SubjekHukum::query()->get();
        $tahuns = Tahun::query()->orderBy('tahun', 'desc')->get();
        $produkHukumHukumsTerpopuler = ProductHukum::mostPopularProducts()->take(4);
        $sumbers = TipeHukum::query()->get();
        return response()->view("pages.users.index", [
            "produkHukums" => $produkHukums,
            "subjekHukums" => $subjekHukums,
            "produkHukumsTerbaru" => $produkHukumHukumsTerbaru,
            "produkHukumsTerpopuler" => $produkHukumHukumsTerpopuler,
            "tahuns" => $tahuns,
            "sumbers" => $sumbers
        ]);
    }



    public function subjek(Request $request): Response
    {
        if ($request->input("keyword")) {
            $keyword = $request->input("keyword");
            $subjekHukums = SubjekHukum::query()->where("nama", "like", "%" . $keyword . "%")->get();
        } else {
            $subjekHukums = SubjekHukum::query()->get();
        }

        return response()->view("pages.users.subjek.index", [
            "subjekHukums" => $subjekHukums
        ]);
    }

    public function sumber(Request $request): Response
    {
        if ($request->input("keyword")) {
            $keyword = $request->input("keyword");
            $sumberDokumen = TipeHukum::query()->where("nama", "like", "%" . $keyword . "%")->get();
        } else {
            $sumberDokumen = TipeHukum::query()->get();
        }

        return response()->view("pages.users.sumber.index", [
            "sumberDokumens" => $sumberDokumen
        ]);
    }


    public function tahun(): Response
    {
        $tahuns = Tahun::query()->orderBy('id', 'desc')->get();
        return response()->view("pages.users.tahun.index", [
            "tahuns" => $tahuns
        ]);
    }

    public function detail(string $id, string $slug): Response
    {
        $produkHukum = ProductHukum::query()->where('id', $id)->orWhere('slug', $slug)->first();
        return response()->view("pages.users.detail.index", [
            "produkHukum" => $produkHukum
        ]);
    }


    public function search(Request $request): Response
    {

        $query = ProductHukum::query();
        // Initialize a flag to check if any search criteria match
        $anyCriteriaMatch = false;

        // Check if any search parameters are provided and set the flag if any criteria are filled
        if ($request->filled(['keyword', 'tentang', 'nomor', 'tahun', 'tag', 'sumber'])) {
            $query->where(function ($q) use ($request, &$anyCriteriaMatch) {
                // Search by keyword in all fields if keyword is provided
                if ($request->filled('keyword')) {
                    $keyword = $request->input('keyword');
                    $q->where(function ($q) use ($keyword) {
                        $q->where('deskripsi', 'like', '%' . $keyword . '%')
                            ->orWhere('nama', 'like', '%' . $keyword . '%')
                            ->orWhere('nomor', 'like', '%' . $keyword . '%')
                            ->orWhere('tipe_dokumen', 'like', '%' . $keyword . '%')
                            ->orWhere('judul', 'like', '%' . $keyword . '%')
                            ->orWhere('tempat_penetapan', 'like', '%' . $keyword . '%')
                            ->orWhere('tanggal_penetapan', 'like', '%' . $keyword . '%')
                            ->orWhere('tanggal_pengundangan', 'like', '%' . $keyword . '%')
                            ->orWhere('tanggal_berlaku', 'like', '%' . $keyword . '%')
                            ->orWhere('sumber', 'like', '%' . $keyword . '%')
                            ->orWhere('status', 'like', '%' . $keyword . '%')
                            ->orWhere('bahasa', 'like', '%' . $keyword . '%')
                            ->orWhere('lokasi', 'like', '%' . $keyword . '%')
                            ->orWhere('teu', 'like', '%' . $keyword . '%')
                            ->orWhere('bidang', 'like', '%' . $keyword . '%')
                            ->orWhere('status_hukum', 'like', '%' . $keyword . '%')
                            ->orWhere('slug', 'like', '%' . $keyword . '%');
                    });
                    $anyCriteriaMatch = true;
                }
                // Search by 'tentang' in 'nama'
                if ($request->filled('tentang')) {
                    $tentang = $request->input('tentang');
                    $q->orWhere('nama', 'like', '%' . $tentang . '%');
                    $anyCriteriaMatch = true;
                }

                // Search by 'nomor'
                if ($request->filled('nomor')) {
                    $nomor = $request->input('nomor');
                    $q->orWhere('nomor', 'like', '%' . $nomor . '%');
                    $anyCriteriaMatch = true;
                }
            });
        } else if ($request->filled('keyword')) {
            // Search only by keyword if it's the only parameter provided
            $keyword = $request->input('keyword');
            $query->where(function ($q) use ($keyword) {
                $q->where('deskripsi', 'like', '%' . $keyword . '%')
                    ->orWhere('nama', 'like', '%' . $keyword . '%')
                    ->orWhere('nomor', 'like', '%' . $keyword . '%')
                    ->orWhere('tipe_dokumen', 'like', '%' . $keyword . '%')
                    ->orWhere('judul', 'like', '%' . $keyword . '%')
                    ->orWhere('tempat_penetapan', 'like', '%' . $keyword . '%')
                    ->orWhere('tanggal_penetapan', 'like', '%' . $keyword . '%')
                    ->orWhere('tanggal_pengundangan', 'like', '%' . $keyword . '%')
                    ->orWhere('tanggal_berlaku', 'like', '%' . $keyword . '%')
                    ->orWhere('sumber', 'like', '%' . $keyword . '%')
                    ->orWhere('status', 'like', '%' . $keyword . '%')
                    ->orWhere('bahasa', 'like', '%' . $keyword . '%')
                    ->orWhere('lokasi', 'like', '%' . $keyword . '%')
                    ->orWhere('teu', 'like', '%' . $keyword . '%')
                    ->orWhere('bidang', 'like', '%' . $keyword . '%')
                    ->orWhere('status_hukum', 'like', '%' . $keyword . '%');
            });
            $anyCriteriaMatch = true;
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
            $anyCriteriaMatch = true;
        }

        // Search by 'nomor'
        if ($request->filled('nomor')) {
            $nomor = $request->input('nomor');
            $query->where('nomor', 'like', '%' . $nomor . '%');
            $anyCriteriaMatch = true;
        }

        // Filter by 'tag' using relation with 'subjekHukums'
        if ($request->filled('tag')) {
            $tags = is_array($request->input('tag')) ? $request->input('tag') : [$request->input('tag')];
            $query->whereHas('subjekHukums', function ($q) use ($tags) {
                $q->whereIn('nama', $tags);
            });
            $anyCriteriaMatch = true;
        }

        // Filter by 'sumber' using 'tipe_dokumen'
        if (($request->input('sumber'))) {
            // dd($request->input("sumber"));
            $sumber = $request->input('sumber');
            $query->whereHas('tipeHukum', function ($q) use ($sumber) {
                $q->where('nama', $sumber);
            });

            $anyCriteriaMatch = true;
        }
        // If no criteria match, ensure no results are returned
        if (!$anyCriteriaMatch) {
            $query->whereRaw('1 = 0');
        }

        // Apply sorting and pagination for better performance and usability
        $produkHukum = $query->orderBy('updated_at', 'desc')->paginate(6)->withQueryString();

        //   dd($produkHukum);
        $produkHukums = ProductHukum::query()->get();
        $subjekHukums = SubjekHukum::query()->get();
        $tahuns = Tahun::query()->orderBy('tahun', 'desc')->get();
        $sumbers = TipeHukum::query()->get();
        return response()->view("pages.users.index", [
            "produkHukums" => $produkHukums,
            "subjekHukums" => $subjekHukums,
            "produkHukums" => $produkHukums,
            "produkHukum" => $produkHukum,
            "tahuns" => $tahuns,
            "sumbers" => $sumbers
        ]);
    }




    public function download(string $id, string $file)
    {

        $produk = ProductHukum::query()->where('id', $id)->first();
        if ($produk) {
            if ($produk->download === null) {
                $produk->download = 1;
            } else {
                $produk->increment('download');
            }
            $produk->save();
        }
        $filePath = storage_path("app/document/" . $file);
        if (!file_exists($filePath)) {
            return redirect()->back()->withErrors(['error' => 'The file does not exist.']);
        }

        return response()->download($filePath);
    }




    public function review(string $id, string $file)
    {

        $produk = ProductHukum::query()->where('id', $id)->first();
        if ($produk) {
            if ($produk->review === null) {
                $produk->review = 1;
            } else {
                $produk->increment('review');
            }
            $produk->save();
        }
        $filePath = storage_path('app/document/' . $file);
        if (!file_exists($filePath)) {
            return redirect()->back()->withErrors(['error' => 'The file does not exist.']);
        }
        return response()->file($filePath);
    }
}
