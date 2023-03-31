<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Site</title>
</head>

<body>

    <header class="app-header">

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <a class="navbar-brand" href="#">CardaShopping</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="#">Home<span class="sr-only"></span></a>
                        <a class="nav-item nav-link" href="#">Categorias</a>
                        <a class="nav-item nav-link" href="#">lojas</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    </header>
    <div class="app-content">
        {{ $slot }}
    </div>
    <footer class="app-footer">
        
    </footer>

</body>

</html>