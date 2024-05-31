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
        $tipe = 
            [
               
                "nama" => "peratuan perundang-undangan",
            
            ]
            ; 
        

            $create = TipeHukum::query()->create($tipe);
            $create->save();

            $tipe2 = TipeHukum::query()->create([
                
               
                "nama" => "peraturan daerah",
                
            ]);
            $tipe2->save();

            $tipe3 = TipeHukum::query()->create([
                
              
                "nama" => "peraturan pemerintah pusat"
                
            ]);
            $tipe3->save();

        // $tipe = TipeHukum::query()->created( $tipe);
        // $tipe->save();
    }
}
