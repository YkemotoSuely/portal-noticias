<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //metodo para mostrar a pagina "home"
    public function home(){
        return view("home");    
    }

    public function contato(){
        return view('contato');

    }
}