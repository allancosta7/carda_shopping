<?php

use App\Models\Loja;
use App\Models\Categoria;

$lojas = Loja::All();
$categorias = Categoria::All();

?>

<x-layout>

<main>



    <div class="row justify-content-center">
      <div class="col-lg-8">


  {{-- CAROUSEL --}}

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="/img/baners/especial.jpg">
        
        {{-- <div class="container">
          <div class="carousel-caption text-start">
            <h1>Está com fome?</h1>
            <p>Conheça nossas lojas.</p>
          </div>
        </div> --}}

      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="/img/baners/pipoca.jpg">

        {{-- <div class="container">
          <div class="carousel-caption">
            <h1>Veja nossas categorias.</h1>
            <p>Olhe o que temos para você !</p>
          </div>
        </div> --}}

      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="/img/baners/quarta.jpg">

        {{-- <div class="container">
          <div class="carousel-caption text-end">
            <h1>Nós conheça um pouco mais.</h1>
            <p>Quem não os nossos desenvolvedores ?</p>
          </div>
        </div> --}}

      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

{{-- END CAROUSEL --}}

</div>
</div>


{{-- INICIO LISTA DE LOJAS --}}

    <section class="py-3 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Lojas</h1>
        </div>
      </div>
    </section>
  
    <div class="album py-3">
      <div class="container">
  
        <div class="row justify-content-center">

          <div class="col-12 col-md-8">
            <div class="row">

              @foreach ($lojas as $loja)
              
          <div class="col-12 col-md-6">
            <a class="ponteiro-loja" href="/perfil_loja/{{$loja->id}}">
              <div class="card mb-3">
                  <div class="row justify-content-center g-0">
                    <div class="col-4">
                      <img src="/img/produto/{{$loja->logo}}" width="130px" height="72px">
                    </div>
                    <div class="col-8">
                      <div class="card-body">
                        <h5 class="card-title">{{$loja->nome}}</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>

              @endforeach

            </div>
          </div>

          </div>
        </div>
      </div>
{{-- FIM LISTA DE LOJAS --}}

      <hr class="featurette-divider">

{{-- CATEGORIAS --}}
<div class="container">

  <section class="py-3 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Categorias</h1>
      </div>
    </div>
  </section>
  
  <div class="album py-3">
    <div class="container">

      <div class="row justify-content-center">

        <div class="col-12 col-md-8">
          <div class="row justify-content-center">
          
          @foreach ($categorias as $categoria)
              
        <div class="col-5 col-md-3">
          <a class="ponteiro-categoria" href="/resultado_pesquisa_loja/{{$categoria->id}}">
            <div class="card mb-3 " style="width: 8rem; border:none;">
                <div class="row">
                  <div class="col-12">
                    <img src="/img/categoria/{{$categoria->imagem}}" width="128px" height="128px">
                  </div>
                  <div class="col-12">
                    <div class="card-body">
                      <h5 class="card-title">{{$categoria->nome}}</h5>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            @endforeach
            
       
          </div>
         </div>
        </div>
      </div>
    </div>

{{-- END CATEGORIAS --}}

  </div><!-- /.container -->

</main>
      
  </body>

</x-layout>
