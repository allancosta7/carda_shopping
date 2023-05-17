<?php

use App\Models\Loja;
use App\Models\Produto;

$loja = Loja::find(1);
$produtos = Produto::where('id_loja', '=', 1)->get();

?>

<x-layout>
  <link rel="stylesheet" href="/css/loja.css">
  <div class="inicio sombra_borda container border">

    <div class="card mb-3">
      <div class="row">
        <div class="loja col-md-4">
          <img src="/img/{{$loja->logo}}" class="imagem img-fluid" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h2 class="nomeLoja card-title">{{$loja->nome}}</h2>
            <p class="descricao card-text">{{$loja->descricao}}</p>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="card-group">

      @foreach ($produtos as $produto) 
      <div class="card">
        <img src="/img/{{$produto->imagem}}" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{$produto->nome}}</h5>
          <p class="card-text">Descrição: {{$produto->descricao}}</p>
          <a href="#" class="btn btn-primary">R${{$produto->preco}}</a>
        </div>
      </div>
      @endforeach

    </div>



    <br>
    <br>
    <br>
  </div>
  </div>


</x-layout>