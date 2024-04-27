<?php

namespace Database\Seeders;

use App\Models\SubjekHukum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjekHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         SubjekHukum::query()->create([
            "judul" => "KEPEGAWAIAN"
         ]);
         SubjekHukum::query()->create([
            "judul" => "APARATUR NEGARA - KODE ETIK"
         ]);
    }
}
