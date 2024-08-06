<?php

namespace Tests\Feature;

use Database\Seeders\CategoryHukumSeeder;
use Tests\TestCase;

class CategoryHukumControllerTest extends TestCase
{
    public function test_index_category_hukum()
    {
        $this->seed(CategoryHukumSeeder::class);
        $category_hukum = $this->categoriHukumService->getCategoriHukum();
        $this->get('/category-hukum')
            ->assertSeeText($category_hukum[0]->title);
    }
}
