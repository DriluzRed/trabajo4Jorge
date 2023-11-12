<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('carga')->insert([
            'camion_id' => 1,
            'material_id' => 1,
            'cantidad_kilos' => 1000,
            'activo' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carga')->insert([
            'camion_id' => 2,
            'material_id' => 2,
            'cantidad_kilos' => 1500,
            'activo' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carga')->insert([
            'camion_id' => 3,
            'material_id' => 3,
            'cantidad_kilos' => 1200,
            'activo' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carga')->insert([
            'camion_id' => 4,
            'material_id' => 4,
            'cantidad_kilos' => 1200,
            'activo' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('carga')->insert([
            'camion_id' => 5,
            'material_id' => 5,
            'cantidad_kilos' => 1200,
            'activo' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
