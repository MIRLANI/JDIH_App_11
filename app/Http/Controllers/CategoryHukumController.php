<?php

namespace App\Http\Controllers;

use App\Models\CategoryHukum;
use App\Http\Requests\StoreCategoryHukumRequest;
use App\Http\Requests\UpdateCategoryHukumRequest;
use App\Services\CategoryHukumService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CategoryHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $kategoryHukums = CategoryHukum::query()->orderBy('title', 'desc')->get();
        return response()->view("pages.admin.category_hukum.category_hukum", [
            "kategory_hukums" => $kategoryHukums
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view("pages.admin.category_hukum.tambah_category_hukum");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryHukumRequest $request)
    {
        try {
             CategoryHukum::create($request->validated());
            return redirect()->route("index.category_hukum")->with("message", "Add Katagori Peraturan Successful");
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->route("index.category_hukum")->with("error", "Validation failed: " . $e->getMessage());
        }
    }

 

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, UpdateCategoryHukumRequest $request): RedirectResponse
    {
        try {
            $categoryHukum = CategoryHukum::findOrFail($id);
            $categoryHukum->update($request->validated());
            return redirect()->route("index.category_hukum")->with("message", "Catagori Peraturan Update Successful");
        } catch (\Exception $e) {
            return redirect()->route("index.category_hukum")->with("error", "Update failed: " . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, CategoryHukum $categoryHukum): RedirectResponse
    {
        $data = $categoryHukum::query()->find($id);
        if ($data->productHukums()->exists()) {
            return redirect()->route("index.category_hukum")->with("error", "Category is still in use and cannot be deleted.");
        }
        $data->delete();
        return redirect()->route("index.category_hukum")->with("message", "Catagori Peraturan Delete Successfull");
    }

   

    public function restore(string $slug): RedirectResponse
    {
        $categoryHukum = CategoryHukum::withTrashed()->where("slug", $slug)->first();
        $categoryHukum->restore();
        return response()->redirectToRoute("index.category_hukum")->with("message", "Restore Category Peraturan Successfully");  
    }


}
