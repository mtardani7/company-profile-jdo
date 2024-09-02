<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('product')->insert([
            [
                'jenis' => 'Elektronik',
                'merek' => 'Samsung',
                'foto' => json_encode(['foto1.jpg', 'foto2.jpg', 'foto3.jpg']),
                'keunggulan' => json_encode(['Keunggulan 1', 'Keunggulan 2', 'Keunggulan 3']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis' => 'Furniture',
                'merek' => 'IKEA',
                'foto' => json_encode(['ikea_foto1.jpg', 'ikea_foto2.jpg']),
                'keunggulan' => json_encode(['Keunggulan A', 'Keunggulan B']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'jenis' => 'Pakaian',
                'merek' => 'Zara',
                'foto' => json_encode(['zara_foto1.jpg', 'zara_foto2.jpg']),
                'keunggulan' => json_encode(['Keunggulan X', 'Keunggulan Y', 'Keunggulan Z']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
