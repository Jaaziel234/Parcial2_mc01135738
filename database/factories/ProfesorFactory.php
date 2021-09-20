<?php
use App\Profesor;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        
        'nombre' => 'Josue4',
        'apellido' => 'Martinez',
        'dui' => '77777-9',
        'telefono' => '74747474',
        'correo' => 'josue@gmail.com',
        'clave' => bcrypt('josue')
    ];
});
