<?php

namespace Tests\Feature;

use App\Models\Peraturan;
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
