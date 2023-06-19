<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <title>CardaShopping</title>

    <!-- Bootstrap core CSS -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="/css/index.css" rel="stylesheet">

</head>

<body>

  <header class="app-header">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top cor">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">CardaShopping</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/quem_somos" tabindex="-1" aria-disabled="true">Quem somos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  </header>

  <div class="app-content">
    {{ $slot }}
    <script src="/js/bootstrap.bundle.min.js"></script>

  </div>
  
  <footer>
    <div class="app-footer">
      <hr class="featurette-divider">
      <footer class="container">
        <p>&copy; Dev's: Allan Costa/ Tales/ Simone/ Gabriel -- 2023</p>
      </footer>
    </div>
  </footer>

</body>

</html>