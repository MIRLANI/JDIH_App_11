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
            "nama" => "Admin",
            "user_id" => 1
        ];

        $tipe = [
            "nama" => "Matematika",
            "user_id" => 2
        ];

        $tipe5 = TipeHukum::query()->create([
            "nama" => "Ilmu Komputer",
            "user_id" => 3
        ]);
        $tipe5->save();

        $create = TipeHukum::query()->create($tipe);
        $create->save();
        
        $tipe2 = TipeHukum::query()->create([
            "nama" => "Fisika",
            "user_id" => 4
        ]);
        $tipe2->save();

        $tipe3 = TipeHukum::query()->create([
            "nama" => "Kimia",
            "user_id" => 5
        ]);
        $tipe3->save();

        

     

       

    }
}
