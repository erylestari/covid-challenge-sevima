<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Covid-19 Information</title>
</head>

<body>
    <nav class="navbar py-4 navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('/asset/logo-hos.png') }}" width="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active align-self-center">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active align-self-center">
                        <a class="nav-link" href="#">RS Rujukan<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active align-self-center">
                        <a class="nav-link" href="#">Statistik Covid-19<span class="sr-only">(current)</span></a>
                    </li>
            </div>
        </div>
    </nav>

    <section class="hero mt-5">
        <div class="container">
            <div class="row">
                <div class="col align-self-center">
                    <h1 class="mb-4">Pusat Informasi Covid-19</h1>
                    <p class="mb-5">
                        Temukan update terbaru mengenai data Covid-19. Tetap patuhi protokol kesehatan.
                    </p>
                </div>
                <div class="col d-none d-sm-block -sm-none d-md-block">
                    <img width="600" src="{{ asset('asset/illustrasi.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>
