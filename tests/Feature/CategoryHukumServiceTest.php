<?php

namespace Tests\Feature;

use App\Models\Kategori;
use App\Services\CategoryHukumService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertNotNull;
use function PHPUnit\Framework\assertNull;
use function PHPUnit\Framework\assertTrue;

class CategoryHukumServiceTest extends TestCase
{


    public function test_add_sukses()
    {
        $result = $this->categoriHukumService->addCategoryHukum("Hukum Perdata", "HP", "hukum-perdata");
        assertTrue($result);
        $ketegori = $this->categoriHukumService->getCategoriHukum();
        foreach ($ketegori as $data) {
            assertEquals("Hukum Perdata", $data->title);
            assertEquals("HP", $data->short_title);
            assertEquals("hukum-perdata", $data->slug);
        }
    }

    public function test_get_categori_hukum_not_null()
    {
        $this->test_add_sukses();
        $result = $this->categoriHukumService->getCategoriHukum();
        assertNotNull($result);
        $result->each(function ($data) {
            assertEquals("Hukum Perdata", $data->title);
            assertEquals("HP", $data->short_title);
            assertEquals("hukum-perdata", $data->slug);
        });
    }

    public function test_update_category_hukum_sukses()
    {
        $this->test_add_sukses();
        $ketegori = $this->categoriHukumService->getCategoriHukum()->first();
        $result = $this->categoriHukumService->update(
            $ketegori->id,
            "Laporan Keuangan",
            "LK",
            "laporan-keuangan"
        );
        assertTrue($result);
        $data = $this->categoriHukumService->getCategoriHukum();
        $data->each(function($data){
            $this->assertEquals("Laporan Keuangan", $data->title);
            $this->assertEquals("LK", $data->short_title);
            $this->assertEquals("laporan-keuangan", $data->slug);
        });
    }

    public function test_delete_category_hukum_sukses()
    {
        $this->test_add_sukses();
        $data = $this->categoriHukumService->getCategoriHukum();
        assertNotNull($data);
        $this->categoriHukumService->delete($data[0]->id);
        Log::info(json_encode($data) );
        assertEquals(0, sizeof($this->categoriHukumService->getCategoriHukum()));
    }
}
