<?php

use Illuminate\Database\Seeder;
use App\Alumno;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* DB::table('alumnos')->insert([
            'nombre' => 'Jaaziel',
            'apellido' => 'Martinez',
            'fechaNacimiento' =>'1998-09-27',
            'direccion' => 'Santo Tomas',
            'genero' => 'Masculino',
            'telefono' => '88888888',
            'correo' => 'jaazielrt6@gmail.com',
            'clave' => bcrypt('jaaziel')

        ]); */
        DB::insert('INSERT INTO alumnos (nombre,apellido,fechaNacimiento,direccion,genero,telefono,correo,clave) VALUES (?,?,?,?,?,?,?,?)',
        ['Isaac','Cubias','1999-08-27','San Miguel','Masculino','88888888','isaacrt6@gmail.com', bcrypt('jaaziel')]);

        /* Alumno::create([

            'nombre' => 'Marvin',
            'apellido' => 'Martinez',
            'fechaNacimiento' => '1999-08-27',
            'direccion' => 'Santo Andres',
            'genero' => 'Masculino',
            'telefono' => '99999999',
            'correo' => 'marvin6@gmail.com',
            'clave' => bcrypt('marvin')
        ]); */
    }
}
