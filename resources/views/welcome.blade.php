<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto refaciones</title>

    <link rel="stylesheet" href="https://auto-refaciones.herokuapp.com/css/app.css">
    <link rel="stylesheet" href="https://auto-refaciones.herokuapp.com/css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</head>

<body class="container">

    @include('partials.navbar')
    <div class="body-center mp-welcome row">
        <div class="col-lg-8">
            <div class="title-welcome mb-4">
                AUTOREFACCIONES REFACCIONES
            </div>
            <div class="sub-title-welcome">
                Todo lo que no encuentren en refaciones nosotros se lo conseguimos.
            </div>
            <div class="mt-4">
                <a href="{{ route('product.index') }}" type="button" class="btn btn-blue btn-lg">Ver ahora</a>
            </div>
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('img/auto-parts.jpg') }}" alt="auto parts" class="img-welcome ">
        </div>
    </div>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="{{ route('product.index') }}"
                        class="nav-link px-2 text-muted">Productos</a></li>
                <li class="nav-item"><a href="{{ route('category.index') }}"
                        class="nav-link px-2 text-muted">Categorias</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2021 Becario Quaxar, Inc</p>
        </footer>
    </div>

</body>

</html>
