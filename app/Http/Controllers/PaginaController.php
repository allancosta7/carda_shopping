<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function carousel()
    {
        return view('carousel');
    }

    public function categoria()
    {
        return view('categorias');
    }

    public function home()
    {
        return view('home.blade.php');
    }
}
