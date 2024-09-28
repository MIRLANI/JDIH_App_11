<?php

namespace Database\Seeders;

use App\Models\Password;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PasswordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Password::query()->create([
            'user_id' => 2,
            'password_name' => 'password 1',
            'password' => 123333,
        ]);

        Password::query()->create([
            'user_id' => 2,
            'password_name' => 'password 2',
            'password' => 445554,
        ]);
    }
}
