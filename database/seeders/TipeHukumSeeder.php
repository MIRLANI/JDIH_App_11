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

        // $tipe = [
        //     "nama" => "Admin",
        //     "user_id" => 1
        // ];

        // $create = TipeHukum::query()->create($tipe);
        // $create->save();
        
      

        $tipe1 = TipeHukum::query()->create([
            "nama" => "Ilmu Komputer",
            "user_id" => 2
        ]);
        $tipe1->save();

        $tipe2 = TipeHukum::query()->create([
            "nama" => "metematika",
            "user_id" => 3
        ]);
        $tipe2->save();

        $tipe3 = TipeHukum::query()->create([
            "nama" => "biologi",
            "user_id" => 4
        ]);
        $tipe3->save();


        $tipe4 = TipeHukum::query()->create([
            "nama" => "fisika",
            "user_id" => 5
        ]);
        $tipe4->save();
        
        $tipe5 = TipeHukum::query()->create([
            "nama" => "kimia",
            "user_id" => 6
        ]);
        $tipe5->save();

        $tipe6 = TipeHukum::query()->create([
            "nama" => "bioteknologi",
            "user_id" => 7
        ]);
        $tipe6->save();
        $tipe7 = TipeHukum::query()->create([
            "nama" => "statistika",
            "user_id" => 8
        ]);
        $tipe7->save();
      

       

    }
}
