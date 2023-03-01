<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso; 
use App\Models\User; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //AGREGAR UN REGISTRO 
        // $this->call(CursoSeeder::class); //esto sirve para hacer el llamado a seeder que creemos
        Curso::factory(50)->create();
        User::factory(10)->create();
        // $curso = new Curso(); // se crea un objeto de tipo curso
        // $curso->name = 'Laravel';//se aggrega un valor a name 
        // $curso->descripcion = 'Iniciando con laravel';//un valor a descripcion
        // $curso->categoria = 'Desarrollo web';//un valor a descripcion
        // $curso->save();//se guarda los cambios para vizualizarlo en BD


        // $curso2 = new Curso(); // se crea un objeto de tipo curso2
        // $curso2->name = 'Vue';//se aggrega un valor a name 
        // $curso2->descripcion = 'Iniciando con vue';//un valor a descripcion
        // $curso2->categoria = 'Desarrollo web con vue';//un valor a descripcion
        // $curso2->save();//se guarda los cambios para vizualizarlo en BD
    }
}
