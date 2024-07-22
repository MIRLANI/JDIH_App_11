<?php

namespace Tests\Feature;

use App\Models\Peraturan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProdukHukumTEst extends TestCase
{
    


    public function test_example(): void
    {
          $produkHukum = Peraturan::query()->find(1);
          $subProdukHukum = $produkHukum->subProducts;
          dd($subProdukHukum);
    }

}
