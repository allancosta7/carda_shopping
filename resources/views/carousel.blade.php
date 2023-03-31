<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

  <div class="container-fluid">

      <!-- slider -->
      <div id="mainSlider" class="carousel slide carousel-style-carrosel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#">
              <img src="image/img1.jpg" class="img-fluid img-style-carrosel" alt="Responsive image" >
            </a>
          </div>
          <div class="carousel-item">
            <a href="#">
              <img src="/image/img2.jpg" class="img-fluid img-style-carrosel" alt="Responsive image">
            </a>
          </div>
          <div class="carousel-item">
            <a href="#">
              <img src="/image/img1.jpg" class="img-fluid img-style-carrosel" alt="Responsive image">
            </a>
          </div>
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
  </div>
</body>

</html>