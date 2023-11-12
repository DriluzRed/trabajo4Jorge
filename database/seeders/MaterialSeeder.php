<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('material')->insert([
            'nombre' => 'Material 1',
            'carga_peligrosa' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('material')->insert([
            'nombre' => 'Material 2',
            'carga_peligrosa' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('material')->insert([
            'nombre' => 'Material 3',
            'carga_peligrosa' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('material')->insert([
            'nombre' => 'Material 4',
            'carga_peligrosa' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('material')->insert([
            'nombre' => 'Material 5',
            'carga_peligrosa' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
