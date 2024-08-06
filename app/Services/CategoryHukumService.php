<?php

namespace App\Services;

interface CategoryHukumService
{
    public function addCategoryHukum(string $title, string $short_title, string $slug): bool;

    public function getCategoriHukum();

    public function update(string $id, string $title, string $short_title, string $slug): bool;

    public function delete(string $id): void;
}
