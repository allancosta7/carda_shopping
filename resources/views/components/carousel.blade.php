<?php

use App\Models\Url;

$urls = url::all();

?>

<!-- inicio carrousel -->
        <div id="mainSlider" class="carousel slide carousel-style-carrosel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                <li data-target="#mainSlider" data-slide-to="1"></li>
                <li data-target="#mainSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                @foreach ($urls as $url)
                    <div class="carousel-item">
                            <a href="{{$url->url}}">
                                <img src="{{$url->url}}" class="img-fluid img-style-carrosel" alt="Responsive image">
                            </a>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- fim carrousel -->