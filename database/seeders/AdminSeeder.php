<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'), 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
