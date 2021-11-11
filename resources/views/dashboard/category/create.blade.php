<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('css/app.css') }}"></script>
</head>

<body class="container">

    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name_category">Nombre de la categoria</label>
            <input type="text" name="name_category" id="name_category" class="form-control">
        </div>
        <input type="submit" value="Registrar" class="btn btn-primary">
    </form>
</body>

</html>