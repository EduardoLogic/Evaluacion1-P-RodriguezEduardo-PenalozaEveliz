<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // LLAMADA A TU SEEDER (DENTRO DE LAS LLAVES)
        $this->call(VehiculoSeeder::class);

        // Esto puedes dejarlo o comentarlo, no afecta a tu entidad Vehiculo
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
