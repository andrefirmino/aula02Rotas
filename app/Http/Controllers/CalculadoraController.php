<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora(){
        return view('calculadora');
    }

    public function calcular(Request $request){
        
        $num1 = $request->num1;
        $num2 = $request->num2;
        $operador = $request->operador;
        $resultado = 0;

        if($operador === "+"){
            $resultado = $num1 + $num2; 
        }else if($operador === "-"){
            $resultado = $num1 - $num2;
        }else if($operador === "/"){
            $resultado = $num1 / $num2;
        }else{
            $resultado = $num1 * $num2;
        }

        return view('calcular', compact('resultado'));

    }
}
