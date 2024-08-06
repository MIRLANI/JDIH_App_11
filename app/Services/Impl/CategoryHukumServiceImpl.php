<?php

namespace App\Services\Impl;

use App\Models\Kategori;
use App\Services\CategoryHukumService;

class CategoryHukumServiceImpl implements CategoryHukumService
{
    public function addCategoryHukum(string $title, string $short_title, string $slug): bool
    {
        $ketegori = Kategori::query()->create([
            'title' => $title,
            'short_title' => $short_title,
            'slug' => $slug,
        ]);

        return $ketegori->save();
    }

    public function getCategoriHukum()
    {
        return Kategori::query()->get();
    }

    public function update(string $id, string $title, string $short_title, string $slug): bool
    {
        $ketegori = Kategori::query()->find($id);
        $ketegori->title = $title;
        $ketegori->short_title = $short_title;
        $ketegori->slug = $slug;

        return $ketegori->save();
    }

    public function delete(string $id): void
    {
        $ketegori = Kategori::query()->find($id);
        if ($ketegori != null) {
            $ketegori->delete();
        }
    }
}
