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
            "email" => "fmipa@uho.ac.id",
            "password" => Hash::make("admin123"),
            "role" => "admin"
        ]);

        User::query()->create([
            "username" => "Ilmu Komputer",
            "email" => "ilkom@gmail.com",
            "password" => Hash::make("ilkom123"),
            "role" => "admin prodik"
        ]);

        User::query()->create([
            "username" => "metematika",
            "email" => "matematika@gmail.com",
            "password" => Hash::make("mtk123"),
            "role" => "admin prodik"
        ]);
        
        User::query()->create([
            "username" => "biologi",
            "email" => "biologi@gmail.com",
            "password" => Hash::make("biologi123"),
            "role" => "admin prodik"
        ]);

        User::query()->create([
            "username" => "fisika",
            "email" => "fisika@gmail.com",
            "password" => Hash::make("fisika123"),
            "role" => "admin prodik"
        ]);

        User::query()->create([
            "username" => "kimia",
            "email" => "kimia@gmail.com",
            "password" => Hash::make("kimia123"),
            "role" => "admin prodik"
        ]);
    }
}
