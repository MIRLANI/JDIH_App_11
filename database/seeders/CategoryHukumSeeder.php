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
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Peraturan Perundang-Undangan",
            "short_title" => "UU",
        ]);
        $categoryHukum->save();
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Peraturan Dekan FMIPA",
            "short_title" => "Peraturan Dekan",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Peraturan Rektor Universitas",
            "short_title" => "Peraturan Rektor",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Surat Edaran FMIPA",
            "short_title" => "Surat Edaran",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Keputusan Dekan FMIPA",
            "short_title" => "Keputusan Dekan",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Panduan Akademik",
            "short_title" => "Panduan",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Peraturan Fakultas",
            "short_title" => "Peraturan Fakultas",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Keputusan Rektor",
            "short_title" => "Keputusan Rektor",
        ]);
        $categoryHukum->save();
        
 
 
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Prosedur Operasional Standar",
            "short_title" => "POS",
        ]);
        $categoryHukum->save();
        

        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Pedoman Akademik",
            "short_title" => "Pedoman Akademik",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Surat Keputusan Dekan",
            "short_title" => "SK Dekan",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Surat Keputusan Rektor",
            "short_title" => "SK Rektor",
        ]);
        $categoryHukum->save();
        
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Peraturan Akademik",
            "short_title" => "Peraturan Akademik",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Kode Etik Mahasiswa",
            "short_title" => "Kode Etik",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Prosedur Administrasi",
            "short_title" => "Prosedur Administrasi",
        ]);
        $categoryHukum->save();
        
        $categoryHukum = CategoryHukum::query()->create([
            "title" => "Prosedur Keuangan",
            "short_title" => "Prosedur Keuangan",
        ]);
        $categoryHukum->save();
        
    }
}
