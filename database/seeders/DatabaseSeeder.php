<?php

namespace Database\Seeders;

use App\Models\AbstrakHukum;
use App\Models\ProductHukum;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::delete("delete from users");
        DB::delete("delete from tipe_hukums");
        DB::delete("delete from tahuns");
        DB::delete("delete from product_hukums");
        DB::delete("delete from category_hukums");
        DB::delete("delete from abstrak_hukums");
        DB::delete("delete from subjek_hukums");

        
        $this->call([
            CategoryHukumSeeder::class,
            TahunSeeder::class,
            SubjekHukumSeeder::class,
            UserSeeder::class,
            TipeHukumSeeder::class,
            ProductHukumSeeder::class,
            AbstrakHukumSeeder::class,
        ]);
        ProductHukum::factory(10)->create();
    }
}
