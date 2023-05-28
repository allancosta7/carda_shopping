<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function loja()
    {
        return view('loja');
    }
    public function devs()
    {
        return view('devs');
    }
    public function perfil_loja()
    {
        return view('perfil_loja');
    }
    public function resultado_pesquisa_loja()
    {
        return view('resultado_pesquisa_loja');
    }

}