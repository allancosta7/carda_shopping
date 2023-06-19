<?php
use App\Models\Loja;
use App\Models\Produto;

$lojas = Loja::where('id','=',$id)->get();

$produtos = Produto::where('id_loja','=',$id)->get();

?>

<x-layout>    

    <style>
        .card{
            margin-top: 15px;
            border-radius: 15px
        }
        .card img{
            border-radius: 15px;
            border: none;
        }
    </style>

    <div class="container">

      @foreach ($lojas as $loja)
          
        <section class="py-5 container">
            <div class="row py-lg-5">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="card col-12" style="border:none;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <div class="row justify-content-center">
                            <img src="/img/produto/{{$loja->logo}}" max-width="264px" max-height="120px">
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$loja->nome}}</h5>
                          <p class="card-text">{{$loja->descricao}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </section>

          @endforeach

          <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
            <div class="col-12 col-lg-8">
              <div class="row justify-content-left">

                @foreach ($produtos as $produto)
                    
            <div class="col-6 col-lg-4" style="margin-top: 25px">
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