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
    public function quem_somos()
    {
        return view('quem_somos');
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