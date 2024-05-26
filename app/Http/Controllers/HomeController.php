<?php

namespace App\Http\Controllers;

use App\Models\Akses;
use App\Models\ProductHukum;
use App\Models\SubjekHukum;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        $produkHukumHukumsTerbaru = ProductHukum::query()->latest()->take(4)->get();
        $produkHukums = ProductHukum::query()->get();
        $subjekHukums = SubjekHukum::query()->get();
        $produkHukumHukumsTerpopuler = ProductHukum::mostPopularProducts();
        return response()->view("pages.users.index", [
            "produkHukums" => $produkHukums,
            "subjekHukums" => $subjekHukums,
            "produkHukumsTerbaru" => $produkHukumHukumsTerbaru,
            "produkHukumsTerpopuler" => $produkHukumHukumsTerpopuler
        ]);
    }

    public function jenis(): Response
    {
        return response()->view("pages.users.jenis.index");
    }

    public function subjek(): Response
    {
        return response()->view("pages.users.subjek.index");
    }
    public function tahun(): Response
    {
        return response()->view("pages.users.tahun.index");
    }

    public function detail(string $id, string $slug): Response
    {
        $produkHukum = ProductHukum::query()->where('id', $id)->orWhere('slug', $slug)->first();
        return response()->view("pages.users.detail.index", [
            "produkHukum" => $produkHukum
        ]);
    }


    public function search(): Response
    {
        $produkHukum = ProductHukum::query()->where('id', 2)->orWhere('slug', "djfd-fdfd")->first();
        $produkHukums = ProductHukum::query()->get();
        $subjekHukums = SubjekHukum::query()->get();
        return response()->view("pages.users.index", [
            "produkHukums" => $produkHukums,
            "subjekHukums" => $subjekHukums,
            "produkHukum" => $produkHukum
        ]);
       
    }

    public function download(string $id, string $file)
    {

        $filePath = storage_path("app/document/" . $file);
        if (!file_exists($filePath)) {
            return redirect()->back()->withErrors(['error' => 'The file does not exist.']);
        }
        $akses = Akses::query()->where('product_hukum_id', $id)->first();
        $akses->increment('download');

        return response()->download($filePath);
    }




    public function review(string $id, string $file)
    {
        $produk = Akses::query()->where('product_hukum_id', $id)->first();
        $produk->increment('review');

        $filePath = storage_path('app/document/' . $file);
        if (!file_exists($filePath)) {
            return redirect()->back()->withErrors(['error' => 'The file does not exist.']);
        }
        return response()->file($filePath);
    }
}
