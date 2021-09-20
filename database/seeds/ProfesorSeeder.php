<?php

use Illuminate\Database\Seeder;
use App\Profesor;
class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       /*  DB::table('profesor')->insert([
            'nombre' => 'Jorge',
            'apellido' => 'Coto',
            'dui' => '777777777-6',
            'telefono' => '74747474',
            'correo' => 'jorge@gmail.com',
            'clave' => bcrypt('jorge')
        ]); */
        DB::insert('INSERT INTO profesor (nombre,apellido,dui,telefono,correo,clave) VALUES (?,?,?,?,?,?)', 
        ['Edwin','Lopez','714612759-3','74747474','edwin@gmail.com', bcrypt('edwim')]);
    }
}
