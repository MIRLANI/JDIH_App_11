<?php

namespace App\Http\Controllers;

use App\Models\ProductHukum;
use App\Http\Requests\StoreProductHukumRequest;
use App\Http\Requests\UpdateProductHukumRequest;
use App\Models\CategoryHukum;
use App\Models\SubjekHukum;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class ProductHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $productHukum = ProductHukum::query()->get();
        return response()->view("pages.admin.product_hukum.produk_hukum", [
            "productHukums" => $productHukum
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $productHukums = ProductHukum::query()->get();
        $categoryHukums = CategoryHukum::query()->get();
        $subjekHukums = SubjekHukum::query()->get();
        return response()->view("pages.admin.product_hukum.tambah_product_hukum", [
            "product_hukums" => $productHukums,
            "category_hukums" => $categoryHukums,
            "subjek_hukums" => $subjekHukums
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductHukumRequest $request)
    {
        if ($request->hasFile("file")) {
            $file = $request->file("file")->getClientOriginalName(); // Mengambil nama file asli
            $request->file("file")->storeAs("public", $file); // Menyimpan file dengan nama asli
        }
    
        $productHukumData = $request->all();
        $productHukumData["file"] = $file; // Menambahkan nama file ke dalam data yang akan disimpan
    
        $productHukum = ProductHukum::create($productHukumData);
        $productHukum->subjekHukums()->sync($request->input("subjek"));
    
        return redirect("/product-hukum")->with("message", "Add Product Hukum Successfully");
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $slug, ProductHukum $productHukum)
    {
        $productHukums = $productHukum->query()->where("slug", $slug)->first();
        return response()->view("pages.admin.product_hukum.detail_product_hukum", [
            "produkHukum" => $productHukums
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug, ProductHukum $productHukum)
    {
        $categoryHukums = CategoryHukum::query()->get();
        $subjekHukums = SubjekHukum::query()->get();
        $productHukums = ProductHukum::query()->get();
        $product = $productHukum->query()->where("slug", $slug)->first();
        return response()->view("pages.admin.product_hukum.update_product_hukum", [
            "product_hukums" => $productHukums,
            "subjek_hukums" => $subjekHukums,
            "category_hukums" => $categoryHukums,
            "product_hukum" => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $slug, UpdateProductHukumRequest $request)
    {
       
        if ($request->file("file")) {
            $extension = $request->file("file")->getClientOriginalExtension();
            // $name = uniqid() . "." . $extension;
            // bisa juga seperti ini 

            $file = $request->input("nama") . "-" . now()->timestamp . "." . $extension;
            // memasukan datanya kedalam direkotri public
            $request->file("file")->storeAs("public", $file);
            // kemudian kita masukan ke dalam database menggunakan merge
            $request->merge(["file" => $file]);
        }

        $productHukum = ProductHukum::query()->where("slug", $slug)->first();
        $productHukum->update($request->all());

        if ($request->input("subjek")) {
            
            $productHukum->catagories()->sync($request->input("subjek"));
        }
        return redirect("/product-hukum")->with("message", "Update Product Successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $productHukum = ProductHukum::query()->where("slug", $slug)->first();
        $productHukum->delete();
        $productHukum->save();
        return response()->redirectToRoute("index.product_hukum")->with("message", "Destroy Product Hukum Successfully");
    }

    public function viewDelete()
    {
        $productHukums = ProductHukum::onlyTrashed()->get();
        return response()->view("pages.admin.product_hukum.view_delete_product_hukum", [
            "productHukums" => $productHukums
        ]);
    }

    public function restore(string $slug): RedirectResponse
    {
        $productHukum = ProductHukum::withTrashed()->where("slug", $slug)->first();
        $productHukum->restore();
        return response()->redirectToRoute("index.product_hukum")->with("message", "Restore Product Hukum Successfully");
    }
}
