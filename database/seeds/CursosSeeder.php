<?php

use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /*  DB::table('cursos')->insert([
            'nombreCurso' => 'programacion 3',
            'year' => '2021',
            'ciclo' => '2',
            'profesor_id' => '1'
        ]);  */
        DB::insert('INSERT INTO cursos (nombreCurso,year,ciclo,profesor_id) VALUES (?,?,?,?)', ['Redes 2','2021','2','1']);
    }
}
