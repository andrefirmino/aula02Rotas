<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function principal(){
        return view('index');
    }


    public function contato(){
        return view('contato');
    }

    public function sobre(){
        return view('sobre');
    }

}
