<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function loja()
    {
        return view('loja');
    }
}