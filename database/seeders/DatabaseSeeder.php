<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $docenteSeeder = new DocenteSeeder();
       $docenteSeeder->run();

     $alumnoSeeder = new AlumnoSeeder();
     $alumnoSeeder->run();


     $this->call(CursoSeeder::class);
     
     $asistenciaSeeder= new AsistenciaSeeder();
     $asistenciaSeeder->run();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
