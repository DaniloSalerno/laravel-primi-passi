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
                <h1 class="display-5 fw-bold">Home page</h1>
                <p class="col-md-8 fs-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis mollitia libero assumenda et distinctio, sit autem praesentium voluptate iure eius voluptatibus nisi dignissimos quisquam iusto molestiae. Laudantium ducimus enim quibusdam quas. Voluptas nisi quisquam reiciendis quidem iure, autem, est quasi non dolorem odit odio voluptate magni placeat minima dicta qui repellendus nemo ut beatae nihil laboriosam, necessitatibus dolores ea. Dolore iste obcaecati deserunt amet, aut animi dolorem quam. Minima, ducimus ad. Totam delectus quaerat unde laborum illo sint doloremque. Minima architecto labore iure libero autem hic! Magnam, amet. Consequuntur rem hic vero natus at quisquam voluptatibus ipsam quod sint sequi autem, nulla, amet ea aut reiciendis optio voluptates ut illo eius dicta distinctio culpa adipisci cumque! Quasi natus distinctio est nihil. Reprehenderit voluptatibus placeat obcaecati! Dolor repudiandae dolorum inventore ex numquam ullam consequuntur, corporis natus veritatis. Ratione voluptatem quaerat doloremque saepe non odit modi, distinctio enim nobis ipsam harum vero repudiandae, ex reprehenderit suscipit labore, aperiam aliquam impedit inventore id ipsum. Magnam esse ipsa iusto, facere quaerat aliquam! Deserunt quidem vel quia dolor asperiores consequuntur ratione fugiat accusantium labore aspernatur, velit vitae veritatis pariatur iure cumque odit sequi! Quod excepturi rem doloremque ipsum beatae porro. Sit eum perspiciatis in repellendus?
                </p>
                <a href="{{ url('/about') }}" class="btn btn-primary btn-lg" type="button">About</a>
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