<?php

namespace Database\Seeders;

use App\Models\CategoryHukum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catagoryHukum = CategoryHukum::query()->create([
            "title" => "Peraturan Badan Pemeriksa Keuangan",
            "short_title" => "Peraturan BPK",
        ]);
        $catagoryHukum->save();

        $catagoryHukum = CategoryHukum::query()->create([
            "title" => "Peraturan Menteri Dalam Negeri",
            "short_title" => "Permendagri",
        ]);
        $catagoryHukum->save();
    }
}
