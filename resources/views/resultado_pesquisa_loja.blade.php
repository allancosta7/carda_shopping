<?php

use App\Models\Produto;

// $produtos = Produto::where('categoria', '=', 'lanche')->get();


?>

<x-layout>
    <link rel="stylesheet" href="/css/resultado_pesquisa_loja.css">

    <div class="container">

        <section class="py-3 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
              <h1 class="fw-light">Resultado</h1>
            </div>
          </div>
        </section>

        <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
            <div class="col-12 col-lg-8">
              <div class="row justify-content-around">

            <div class="col-6 col-lg-4">
              <div class="card">
                <img src="https://s2.glbimg.com/V0vLGchlI0S7Xll4emaGMIJZSLU=/940x523/e.glbimg.com/og/ed/f/original/2021/01/07/bk-novo_logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Produto</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-4">
              <div class="card">
                <img src="https://s2.glbimg.com/V0vLGchlI0S7Xll4emaGMIJZSLU=/940x523/e.glbimg.com/og/ed/f/original/2021/01/07/bk-novo_logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Produto</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-4">
              <div class="card">
                <img src="https://s2.glbimg.com/V0vLGchlI0S7Xll4emaGMIJZSLU=/940x523/e.glbimg.com/og/ed/f/original/2021/01/07/bk-novo_logo.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Produto</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            

          </div>
          </div>
          </div>
    </div>

</x-layout>