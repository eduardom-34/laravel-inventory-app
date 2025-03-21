<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("product")->insert([
            [
                'name' => 'Botella de agua 500ml',
                'description' => 'Botella de agua marca cristal con volumen de 500ml',
                'unit_price' => 3.23,
                'stock' => 300,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arroz 1kg',
                'description' => 'Paquete de arroz blanco de 1 kilogramo',
                'unit_price' => 1.20,
                'stock' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aceite vegetal 900ml',
                'description' => 'Botella de aceite para cocinar',
                'unit_price' => 2.10,
                'stock' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ]

            ]);
    }
}
