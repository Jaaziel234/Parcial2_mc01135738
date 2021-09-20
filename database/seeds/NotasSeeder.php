<?php

use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* DB::table('notas')->insert([
            'nota1' => '10',
            'nota2' => '10',
            'nota3' => '10',
            'nota4' => '10',
            'promedio' => '10',
            'parcial' => '2',
            'profesor_id' => '1',
            'alumno_id' => '1',
            'curso_id' => '1'
        ]); */
        DB::insert('INSERT INTO notas (nota1,nota2,nota3,nota4,promedio,parcial,profesor_id,alumno_id,curso_id) VALUES (?,?,?,?,?,?,?,?,?)', 
        ['9','9','10','10','9','2','1','1','1']);
    }
}
