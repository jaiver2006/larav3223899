<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{

    public function saludar(){

    return "hola desde la funcion saludar..";
    }

    public function sumar($num1,$num2){

        $resultado=$num1+$num2;


        return $resultado;
    
    }

    public function restar($num1, $num2)
    {
        $resultado = $num1 - $num2;
        return $resultado;
    }

    public function multiplicar($num1, $num2)
    {
        $resultado = $num1 * $num2;
        return $resultado;
    }

    public function AreaTriangulo($base, $altura)
    {
        $resultado = ($base * $altura) / 2;
        return $resultado;
    }

    public function AreaCuadrado($lado)
    {
        $resultado = $lado * $lado;
        return $resultado;
    }

    public function AreaRectangulo($base, $altura)
    {
        $resultado = $base * $altura;
        return $resultado;
    }

    public function AreaParalelogramo ($base, $altura)
    {
        $resultado = $base * $altura;
        return $resultado;
    }

    public function AreaCirculo ($radio)
    {
        $resultado = $radio * $radio * 3.14;
        return $resultado;
    }
    public function Trapecio ($base, $altura)
    {
        $resultado = ($base * $base * $altura)/ 2;
        return $resultado;
    }
    
    public function cuadratica($a, $b, $c)
    {
        $discriminante = $b * $b - 4 * $a * $c;

        if ($discriminante < 0) {
            return "No hay soluciones reales.";
        } elseif ($discriminante == 0) {
            $x = -$b / (2 * $a);
            return "La única solución es: x = " . $x;
        } else {
            $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
            return "Las soluciones son: x1 = " . $x1 . " y x2 = " . $x2;
        }
    }
}
