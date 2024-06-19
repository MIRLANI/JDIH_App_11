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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('tipe_hukums')->truncate();
        DB::table('tahuns')->truncate();
        DB::table('product_hukums')->truncate();
        DB::table('category_hukums')->truncate();
        DB::table('abstrak_hukums')->truncate();
        DB::table('subjek_hukums')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        
        $this->call([
            CategoryHukumSeeder::class,
            TahunSeeder::class,
            SubjekHukumSeeder::class,
            UserSeeder::class,
            TipeHukumSeeder::class,
            ProductHukumSeeder::class,
            AbstrakHukumSeeder::class,
        ]);
    }
}
