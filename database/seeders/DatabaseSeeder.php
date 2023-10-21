<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\TipoPresenca;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$tpres = new TipoPresencaSeeder();
        //$tpres->run();

        //$materia = new MateriaSeeder();
        //$materia->run();

        //$permissao = new PermissaoSeeder();
        //$permissao->run();

        //$usuario = new UsuarioSeeder();
        //$usuario->run();

        //$curso = new CursoSeeder();
        //$curso->run();

        //$class = new ClasseSeeder();
        //$class->run();

        $pres = new PresencaSeeder();
        $pres->run();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
