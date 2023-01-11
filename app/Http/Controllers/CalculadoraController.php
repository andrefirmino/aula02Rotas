<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora(){
        return view('calculadora');
    }

    public function calcular($num1, $num2, $operador){
        
        $resultado = $num1 || $operador ||  $num2;
        
        return $resultado; 

    }
}
