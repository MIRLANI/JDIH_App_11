<?php


namespace App\Services\Impl;

use App\Http\Requests\StoreCategoryHukumRequest;
use App\Models\CategoryHukum;
use App\Services\CategoryHukumService;

class CategoryHukumServiceImpl implements CategoryHukumService
{
	public function addCategoryHukum(string $title, string $short_title, string $slug): bool
    {
        $categoryHukum = CategoryHukum::query()->create([
            "title" => $title,
            "short_title" => $short_title,
            "slug" => $slug
        ]);
        return $categoryHukum->save();
    }

    public function getCategoriHukum()
    {
       return CategoryHukum::query()->get(); 
    }


    public function update(string $id, string $title, string $short_title, string $slug): bool
    {
        $categoryHukum = CategoryHukum::query()->find($id);
        $categoryHukum->title = $title;
        $categoryHukum->short_title = $short_title;
        $categoryHukum->slug = $slug;
        return $categoryHukum->save();    
    }

   
    public function delete(string $id): void
    {
        $categoryHukum = CategoryHukum::query()->find($id);
        if($categoryHukum != null)
        {
             $categoryHukum->delete();
        }
    }
}