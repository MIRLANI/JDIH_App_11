<?php

namespace Database\Seeders;

use App\Models\TipeHukum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeHukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tipe = [
            "nama" => "Matematika",
        ];
        $create = TipeHukum::query()->create($tipe);
        $create->save();

        $tipe2 = TipeHukum::query()->create([
            "nama" => "Fisika",
        ]);
        $tipe2->save();

        $tipe3 = TipeHukum::query()->create([
            "nama" => "Kimia",
        ]);
        $tipe3->save();

        $tipe4 = TipeHukum::query()->create([
            "nama" => "Biologi",
        ]);
        $tipe4->save();

        $tipe5 = TipeHukum::query()->create([
            "nama" => "Ilmu Komputer",
        ]);
        $tipe5->save();

        $tipe6 = TipeHukum::query()->create([
            "nama" => "Statistika",
        ]);
        $tipe6->save();

        $tipe7 = TipeHukum::query()->create([
            "nama" => "Geofisika",
        ]);
        $tipe7->save();

        $tipe8 = TipeHukum::query()->create([
            "nama" => "Aktuaria",
        ]);
        $tipe8->save();

        $tipe9 = TipeHukum::query()->create([
            "nama" => "Astronomi",
        ]);
        $tipe9->save();

        $tipe10 = TipeHukum::query()->create([
            "nama" => "Oseanografi",
        ]);
        $tipe10->save();

        $tipe11 = TipeHukum::query()->create([
            "nama" => "Meteorologi",
        ]);
        $tipe11->save();

        $tipe12 = TipeHukum::query()->create([
            "nama" => "Ilmu Lingkungan",
        ]);
        $tipe12->save();

        $tipe13 = TipeHukum::query()->create([
            "nama" => "Ilmu Kelautan",
        ]);
        $tipe13->save();

        $tipe14 = TipeHukum::query()->create([
            "nama" => "Ilmu Tanah",
        ]);
        $tipe14->save();

        $tipe15 = TipeHukum::query()->create([
            "nama" => "Ilmu Hutan",
        ]);
        $tipe15->save();

        $tipe16 = TipeHukum::query()->create([
            "nama" => "Ilmu Kehutanan",
        ]);
        $tipe16->save();

        $tipe17 = TipeHukum::query()->create([
            "nama" => "Ilmu Perairan",
        ]);
        $tipe17->save();

        $tipe18 = TipeHukum::query()->create([
            "nama" => "Ilmu Pertanian",
        ]);
        $tipe18->save();

        $tipe19 = TipeHukum::query()->create([
            "nama" => "Ilmu Peternakan",
        ]);
        $tipe19->save();

        $tipe20 = TipeHukum::query()->create([
            "nama" => "Ilmu Kesehatan Masyarakat",
        ]);
        $tipe20->save();
    }
}
