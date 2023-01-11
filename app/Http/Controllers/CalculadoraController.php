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

        $operador === "+"?$resultado = $num1 + $num2:
        ($operador === "-"?$resultado = $num1 - $num2:
        ($operador === "*"?$resultado = $num1 * $num2:
        (($num1===0||$num2===0)?$resultado = $num1 / $num2:$resultado = "Houve um erro, número não pode ser divisivel por zero!")));
        

        return view('calcular', compact('resultado'));

    }
}
