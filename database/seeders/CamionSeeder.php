<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CamionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('camion')->insert([
            'marca' => 'Marca 1',
            'chapa' => 'ABC123',
            'activo' => true,
            'capacidad_maxima_kilos' => 5000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camion')->insert([
            'marca' => 'Marca 2',
            'chapa' => 'XYZ789',
            'activo' => false,
            'capacidad_maxima_kilos' => 7000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('camion')->insert([
            'marca' => 'Marca 3',
            'chapa' => 'DEF456',
            'activo' => true,
            'capacidad_maxima_kilos' => 6000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('camion')->insert([
            'marca' => 'Marca 4',
            'chapa' => 'DEZ456',
            'activo' => true,
            'capacidad_maxima_kilos' => 6000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('camion')->insert([
            'marca' => 'Marca 5',
            'chapa' => 'DEF476',
            'activo' => true,
            'capacidad_maxima_kilos' => 6000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
