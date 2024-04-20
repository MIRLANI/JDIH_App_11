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
    private CategoryHukumService $categoryHukumService;

    public function __construct(CategoryHukumService $categoryHukumService)
    {
        $this->categoryHukumService = $categoryHukumService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $categoryHukum = CategoryHukum::query()->get();
        return response()->view("pages.admin.category_hukum.category_hukum", [
            "category_hukum" => $categoryHukum
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
        $title = $request->input("title");
        $short_title = $request->input("short_title");
        $slug = $request->input("slug");
        $request->validate([
            $title, $short_title
        ]);
        $categoryHukum = CategoryHukum::query()->create([
            "title" =>  $title,
            "short_title" => $short_title
        ]);
        $categoryHukum->save();
        return redirect("/category-hukum");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug, CategoryHukum $categoryHukum)
    {
        $categoryHukums = $categoryHukum->query()->where("slug", $slug)->first();
        return response()->view("pages.admin.category_hukum.detail_category_hukum",[
            "categoryHukum" => $categoryHukums
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug, CategoryHukum $categoryHukum): Response
    {
        return response()->view(
            "pages.admin.category_hukum.update_category_hukum",
            [
                "categoryHukum" => $categoryHukum->query()->where("slug", $slug)->first()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $slug, UpdateCategoryHukumRequest $request): RedirectResponse
    {
        $categoryHukum = CategoryHukum::query()->where("slug", $slug)->first();
        $categoryHukum->title = $request->input("title");
        $categoryHukum->short_title = $request->input("short_title");
        $categoryHukum->update();
        return redirect()->route("index.category_hukum")->with("message", "Catagori Hukum Update Successfull");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug, CategoryHukum $categoryHukum): RedirectResponse
    {
        $data = $categoryHukum::query()->where("slug", $slug)->first();
        $data->delete();
        return redirect()->route("index.category_hukum")->with("message", "Catagori Hukum Destroy Successfull");
    }
}
