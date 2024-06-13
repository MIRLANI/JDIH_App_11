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
            "tahun" => 2005,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2006,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2007,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2008,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2009,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2010,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2011,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2012,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2013,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2014,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2015,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2016,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2017,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2018,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2019,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2020,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2021,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2022,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2023,
        ]);
        $tahun->save();
        
        $tahun = Tahun::query()->create([
            "tahun" => 2024,
        ]);
        $tahun->save();
        
    }
}
