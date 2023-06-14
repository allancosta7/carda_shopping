<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function quem_somos()
    {
        return view('quem_somos');
    }
    public function perfil_loja($id)
    {
        return view('perfil_loja', ['id' => $id]);
    }
    public function resultado_pesquisa_loja($id)
    {
        return view('resultado_pesquisa_loja', ['id' => $id]);
    }

}