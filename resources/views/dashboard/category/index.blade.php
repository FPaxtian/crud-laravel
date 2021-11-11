@extends('dashboard.main')
@section('body')

    <div class="body-center list-category  text-center">
        <div><a href="{{ route('category.create') }}" class="btn btn-primary btn-lg btn-blue col-8 mx-auto">Crear
                categoria</a></div><br>
        <div class="card color-grey-db">
            <div class="card-body row">
                <div class="col-md-3">ID</div>
                <div class="col-md-3">Nombre</div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
        @foreach ($categorys as $category)
            <div class="card list-category-tab text-center">
                <div class="card-body row">
                    <div class="col-md-3 col-sm-6">{{ $category->id }}</div>
                    <div class="col-md-3 col-sm-6 mb-3">{{ $category->name_category }}</div>
                    <div class="col-md-3 col-sm-6 mb-3"><a href="{{ route('category.edit', $category->id) }}"
                            class="btn btn-secondary">Actualizar</a>
                    </div>
                    <div class="col-md-3 col-sm-6"><button type="button" class="btn btn-danger">Eliminar</button></div>
                </div>
            </div>

        @endforeach

        {{ $categorys->links() }}
    </div>

@endsection
