<?php

use App\Models\Produto;
use App\Models\Categoria;


$produtos = Produto::where('id_categoria', '=', $id)->get();
$categorias = Categoria::where('id', '=', $id)->get();

?>

<x-layout>
    <link rel="stylesheet" href="/css/resultado_pesquisa_loja.css">

    <div class="container">

        <section class="py-3 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              @foreach ($categorias as $categoria)  
                <h1 class="fw-light">{{$categoria->nome}}</h1>
              @endforeach
            </div>
          </div>
        </section>

        <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
            <div class="col-12 col-lg-8">
              <div class="row justify-content-left">

                @foreach ($produtos as $produto)
                    
                <div class="col-6 col-lg-4" style="margin-top: 35px">
                  <div class="h-100 card">
                    <img src="/img/produto/{{$produto->foto}}" class="card-img-top">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          <h5 class="card-title">{{$produto->nome}}</h5>
                        </div>
                        <div class="col-12">
                          <p class="card-text">{{$produto->descricao}}</p>
                        </div>
                        <div class="col-12">
                          <p class="card-text">R${{$produto->preco}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        

            @endforeach

          </div>
          </div>
          </div>
    </div>

</x-layout>