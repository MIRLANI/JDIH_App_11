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
            "email" => "admin@uho.ac.id",
            "password" => Hash::make("admin123"),
            "role" => "admin"
        ]);

        User::query()->create([
            "username" => "Ilmu Komputer",
            "email" => "ilkom@uho.ac.id",
            "password" => Hash::make("ilkom123"),
            "role" => "sub admin"
        ]);

        User::query()->create([
            "username" => "metematika",
            "email" => "matematika@uho.ac.id",
            "password" => Hash::make("mtk123"),
            "role" => "sub admin"
        ]);
        
        User::query()->create([
            "username" => "biologi",
            "email" => "biologi@uho.ac.id",
            "password" => Hash::make("biologi123"),
            "role" => "sub admin"
        ]);

        User::query()->create([
            "username" => "fisika",
            "email" => "fisika@uho.ac.id",
            "password" => Hash::make("fisika123"),
            "role" => "sub admin"
        ]);

        User::query()->create([
            "username" => "kimia",
            "email" => "kimia@uho.ac.id",
            "password" => Hash::make("kimia123"),
            "role" => "sub admin"
        ]);
        
        User::query()->create([
            "username" => "bioteknologi",
            "email" => "bioteknologi@uho.ac.id",
            "password" => Hash::make("bioteknologi123"),
            "role" => "sub admin"
        ]);

        User::query()->create([
            "username" => "statistika",
            "email" => "statistika@uho.ac.id",
            "password" => Hash::make("statistika123"),
            "role" => "sub admin"
        ]);
    }
}
