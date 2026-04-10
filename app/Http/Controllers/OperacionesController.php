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
}
