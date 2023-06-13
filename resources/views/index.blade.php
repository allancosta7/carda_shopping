<?php

use App\Models\Url;
use App\Models\Loja;
use App\Models\Categorias;


$url1 = Url::find(1);
$url2 = Url::find(2);
$url3 = Url::find(3);

$urls = URL::all();


$lojas = Loja::All();


?>

<x-layout>

<main>

  {{-- CAROUSEL --}}
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{$url1->url}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Está com fome?</h1>
            <p>Conheça nossas lojas.</p>
            <p><a class="btn btn-lg btn-primary" href="/loja">Lojas</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{$url2->url}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

        <div class="container">
          <div class="carousel-caption">
            <h1>Veja nossas categorias.</h1>
            <p>Olhe o que temos para você !</p>
            <p><a class="btn btn-lg btn-primary" href="/categoria">Categoria</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="{{$url3->url}}" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Nós conheça um pouco mais.</h1>
            <p>Quem não os nossos desenvolvedores ?</p>
            <p><a class="btn btn-lg btn-primary" href="/devs">Sobre nós</a></p>
          </div>
        </div>
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


@foreach ($lojas as $loja)
          
          <div class="col-12 col-md-4">
            <a class="ponteiro-loja" href="/perfil_loja">
              <div class="card mb-3">
                  <div class="row justify-content-center g-0">
                    <div class="col-4">
                      <img src="https://s2.glbimg.com/V0vLGchlI0S7Xll4emaGMIJZSLU=/940x523/e.glbimg.com/og/ed/f/original/2021/01/07/bk-novo_logo.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-8">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
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

        <div class="col-5 col-md-2">
          <a class="ponteiro-categoria" href="/perfil_loja">
            <div class="card mb-3 " style="width: 8rem; border:none;">
                <div class="row">
                  <div class="col-12">
                    <img src="https://s2.glbimg.com/V0vLGchlI0S7Xll4emaGMIJZSLU=/940x523/e.glbimg.com/og/ed/f/original/2021/01/07/bk-novo_logo.jpg" class="img-fluid" alt="...">
                  </div>
                  <div class="col-12">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
            

        </div>
      </div>
    </div>

{{-- END CATEGORIAS --}}

  </div><!-- /.container -->

</main>


    <script src="/js/bootstrap.bundle.min.js"></script>

      
  </body>

</x-layout>
