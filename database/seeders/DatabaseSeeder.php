<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Crear roles
        $adminRole = Roles::factory()->create(['nombre' => 'admin','descripcion' => 'es el administrador']);
        $almaceneroRole = Roles::factory()->create(['nombre' => 'almacenero','descripcion' => 'es el almacenero']);

        // Crear un usuario y asignarle un rol
        User::factory()->create([
            'name' => 'Tito Carlos',
            'email' => 'titocarlos080@gmail.com',
            'password' => Hash::make('123'),
            'remember_token' => "",
            'rol_id' => $adminRole->rol_id, // Asocia el usuario con el rol 'admin'
        ]);

     

    }
}
