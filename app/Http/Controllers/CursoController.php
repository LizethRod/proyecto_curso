<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName(){
        return view('welcome', ['name' => 'ejemplo']);
    }

    public function sumar($x = 5, $y = 10){
        $suma = $x + $y;
        return "La suma de $x + $y es: $suma";
    }

    public function restar($x = 100, $y = 20){
        $resta = $x - $y;
        return "La resta de $x - $y es: $resta";
    }

    public function multiplicar($x = 5, $y = 10){
        $multiplicacion = $x * $y;
        return "La multiplicación de $x * $y es: $multiplicacion";
    }
    
    public function dividir($x = 150, $y = 3){
        if($y == 0){
            return "No se puede dividir entre 0. Ingresa un número diferente de 0";
        }
        $division = $x / $y;
        return "La división de $x / $y es: $division";
    }

}
