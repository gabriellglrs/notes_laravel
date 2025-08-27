<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'uuid' => Str::uuid(),
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'last_login' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'email' => 'gabriel@example.com',
                'password' => Hash::make('123456'),
                'last_login' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'email' => 'teste@example.com',
                'password' => Hash::make('teste'),
                'last_login' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
