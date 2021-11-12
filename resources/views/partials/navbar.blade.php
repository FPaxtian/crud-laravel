<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}"><img class="img-logo"
                src="{{ asset('img/logo_600.png') }}" alt="logo-auto"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('product.index') }}">Productos</a>
                <a class="nav-link" href="{{ route('category.index') }}">Categoria</a>
            </div>
            <form class="d-flex ml-auto">
                <a type="button" href="{{ route('dashboard') }}" class="btn btn-light btn-blue">Ir panel control</a>
            </form>
        </div>
    </div>
</nav>
