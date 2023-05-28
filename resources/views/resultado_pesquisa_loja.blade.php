<?php

use App\Models\Produto;

$produtos = Produto::where('categoria', '=', 'lanche')->get();


?>

<x-layout>
    <link rel="stylesheet" href="/css/resultado_pesquisa_loja.css">

    <div class="sombra_borda container border">

        <h3>CATEGORIA</h3>

        
    </div>

</x-layout>