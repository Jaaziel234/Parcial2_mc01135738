<?php
use App\Alumno;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        //
        'nombre' => 'Oscar',
        'apellido' => 'Reyes',
        'fechaNacimiento' => '1999-08-27',
        'direccion' => 'Santo J',
        'genero' => 'Masculino',
        'telefono' => '5555555',
        'correo' => 'oscar6@gmail.com',
        'clave' => bcrypt('oscar')
    ];
});
