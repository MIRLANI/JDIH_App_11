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
            "nama" => "peraturan perundang-undangan",
        ];
        $create = TipeHukum::query()->create($tipe);
        $create->save();

        $tipe2 = TipeHukum::query()->create([
            "nama" => "peraturan daerah",
        ]);
        $tipe2->save();

        $tipe3 = TipeHukum::query()->create([
            "nama" => "peraturan pemerintah pusat",
        ]);
        $tipe3->save();

        $tipe4 = TipeHukum::query()->create([
            "nama" => "instruksi presiden",
        ]);
        $tipe4->save();

        $tipe5 = TipeHukum::query()->create([
            "nama" => "keputusan menteri",
        ]);
        $tipe5->save();

        $tipe6 = TipeHukum::query()->create([
            "nama" => "surat edaran",
        ]);
        $tipe6->save();

        $tipe7 = TipeHukum::query()->create([
            "nama" => "peraturan menteri",
        ]);
        $tipe7->save();

        $tipe8 = TipeHukum::query()->create([
            "nama" => "keputusan gubernur",
        ]);
        $tipe8->save();

        $tipe9 = TipeHukum::query()->create([
            "nama" => "peraturan gubernur",
        ]);
        $tipe9->save();

        $tipe10 = TipeHukum::query()->create([
            "nama" => "keputusan bupati",
        ]);
        $tipe10->save();

        $tipe11 = TipeHukum::query()->create([
            "nama" => "peraturan bupati",
        ]);
        $tipe11->save();

        $tipe12 = TipeHukum::query()->create([
            "nama" => "keputusan walikota",
        ]);
        $tipe12->save();

        $tipe13 = TipeHukum::query()->create([
            "nama" => "peraturan walikota",
        ]);
        $tipe13->save();

        $tipe14 = TipeHukum::query()->create([
            "nama" => "keputusan dirjen",
        ]);
        $tipe14->save();

        $tipe15 = TipeHukum::query()->create([
            "nama" => "peraturan dirjen",
        ]);
        $tipe15->save();

        $tipe16 = TipeHukum::query()->create([
            "nama" => "keputusan rektor",
        ]);
        $tipe16->save();

        $tipe17 = TipeHukum::query()->create([
            "nama" => "peraturan rektor",
        ]);
        $tipe17->save();

        $tipe18 = TipeHukum::query()->create([
            "nama" => "keputusan dekan",
        ]);
        $tipe18->save();

        $tipe19 = TipeHukum::query()->create([
            "nama" => "peraturan dekan",
        ]);
        $tipe19->save();

        $tipe20 = TipeHukum::query()->create([
            "nama" => "nota dinas",
        ]);
        $tipe20->save();
    }
}
