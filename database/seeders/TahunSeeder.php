<?php

namespace Database\Seeders;

use App\Models\Tahun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tahun = Tahun::query()->create([
            "tahun" => 2024,
        ]);
        $tahun->save();
        $tahun = Tahun::query()->create([
            "tahun" => 2023,
        ]);
        $tahun->save();
        $tahun = Tahun::query()->create([
            "tahun" => 2022,
        ]);
        $tahun->save();
        $tahun = Tahun::query()->create([
            "tahun" => 2021,
        ]);
        $tahun->save();
    }
}
