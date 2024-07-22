<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ketegori = Kategori::query()->create([
            "title" => "Peraturan Perundang-Undangan",
            "short_title" => "UU",
        ]);
        $ketegori->save();
        $ketegori = Kategori::query()->create([
            "title" => "Peraturan Dekan FMIPA",
            "short_title" => "Peraturan Dekan",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Peraturan Rektor Universitas",
            "short_title" => "Peraturan Rektor",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Surat Edaran FMIPA",
            "short_title" => "Surat Edaran",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Keputusan Dekan FMIPA",
            "short_title" => "Keputusan Dekan",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Panduan Akademik",
            "short_title" => "Panduan",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Peraturan Fakultas",
            "short_title" => "Peraturan Fakultas",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Keputusan Rektor",
            "short_title" => "Keputusan Rektor",
        ]);
        $ketegori->save();
        
 
 
        $ketegori = Kategori::query()->create([
            "title" => "Prosedur Operasional Standar",
            "short_title" => "POS",
        ]);
        $ketegori->save();
        

        
        $ketegori = Kategori::query()->create([
            "title" => "Pedoman Akademik",
            "short_title" => "Pedoman Akademik",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Surat Keputusan Dekan",
            "short_title" => "SK Dekan",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Surat Keputusan Rektor",
            "short_title" => "SK Rektor",
        ]);
        $ketegori->save();
        
        
        $ketegori = Kategori::query()->create([
            "title" => "Peraturan Akademik",
            "short_title" => "Peraturan Akademik",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Kode Etik Mahasiswa",
            "short_title" => "Kode Etik",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Prosedur Administrasi",
            "short_title" => "Prosedur Administrasi",
        ]);
        $ketegori->save();
        
        $ketegori = Kategori::query()->create([
            "title" => "Prosedur Keuangan",
            "short_title" => "Prosedur Keuangan",
        ]);
        $ketegori->save();
        
    }
}
