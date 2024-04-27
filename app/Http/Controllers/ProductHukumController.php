<?php

namespace App\Http\Controllers;

use App\Models\ProductHukum;
use App\Http\Requests\StoreProductHukumRequest;
use App\Http\Requests\UpdateProductHukumRequest;
use App\Models\CategoryHukum;
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
         return response()->view("pages.admin.product_hukum.tambah_product_hukum");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductHukumRequest $request)
    {
        dd($request);
         $productHukum = CategoryHukum::query()->create($request->all());
         $productHukum->save();
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
    public function edit(ProductHukum $productHukum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductHukumRequest $request, ProductHukum $productHukum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductHukum $productHukum)
    {
        //
    }
}
