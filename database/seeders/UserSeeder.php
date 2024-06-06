<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            "username" => "Administrator",
            "email" => "admin@gmail.com",
            "password" => Hash::make("lani"),
            "role" => "admin"
        ]);

        User::query()->create([
            "username" => "Matematika",
            "email" => "matematika@gmail.com",
            "password" => Hash::make("lani"),
            "role" => "user"
        ]);

        User::query()->create([
            "username" => "Ilmu Komputer",
            "email" => "ilkom@gmail.com",
            "password" => Hash::make("lani"),
            "role" => "user"
        ]);

        User::query()->create([
            "username" => "Fisika",
            "email" => "fisika@gmail.com",
            "password" => Hash::make("lani"),
            "role" => "user"
        ]);
        User::query()->create([
            "username" => "Kimia",
            "email" => "kimia@gmail.com",
            "password" => Hash::make("lani"),
            "role" => "user"
        ]);
    }
}
