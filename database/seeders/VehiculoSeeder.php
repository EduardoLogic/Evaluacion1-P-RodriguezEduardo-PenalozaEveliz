<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoSeeder extends Seeder
{
    public function run(): void
    {
        Vehiculo::create(['placa' => 'AB123CD', 'modelo' => 2024, 'precio_venta' => 1500.00, 'usado' => false]);
        Vehiculo::create(['placa' => 'XY987ZZ', 'modelo' => 2018, 'precio_venta' => 1200.50, 'usado' => true]);
        Vehiculo::create(['placa' => 'JK555LM', 'modelo' => 2020, 'precio_venta' => 2000.00, 'usado' => true]);
    }
}
