<?php

namespace Database\Seeders;

use App\Models\AbstrakHukum;
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
        DB::delete("delete from product_hukums");
        DB::delete("delete from category_hukums");
        DB::delete("delete from abstrak_hukums");
        DB::delete("delete from subjek_hukums");
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'mirlani',
            'email' => 'lani@gmail.com',
        ]);

        $this->call(CategoryHukumSeeder::class);
        $this->call(ProductHukumSeeder::class);
        $this->call(AbstrakHukumSeeder::class);
        $this->call(SubjekHukumSeeder::class);
    }
}
