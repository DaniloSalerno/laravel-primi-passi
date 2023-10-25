<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel primi passi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="antialiased">

    <header>
        <nav class="bg-dark py-4">
            <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/contacts') }}">Contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">

                <h1 class="display-5 fw-bold">
                    {{$title}}
                </h1>

                <p class="col-md-8 fs-4">
                    {{$message}}
                </p>
            </div>
        </div>
    </main>

    <footer class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-white text-decoration-none" href="#">Lorem.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Itaque?</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Sed.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Exercitationem.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Repellat.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Provident.</a></li>
                    </ul>
                </div>
                <!-- /.col -->

                <div class="col">
                    <h5>About</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-white text-decoration-none" href="#">Lorem.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Itaque?</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Sed.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Exercitationem.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Repellat.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Provident.</a></li>
                    </ul>
                </div>
                <!-- /.col -->

                <div class="col">
                    <h5>Contacts</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-white text-decoration-none" href="#">Lorem.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Itaque?</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Sed.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Exercitationem.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Repellat.</a></li>
                        <li><a class="text-white text-decoration-none" href="#">Provident.</a></li>
                    </ul>
                </div>
                <!-- /.col -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </footer>

</body>

</html>