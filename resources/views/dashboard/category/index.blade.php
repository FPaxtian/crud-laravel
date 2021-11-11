@extends('dashboard.main')
@section('body')

    <div class="body-center list-category  text-center">
        <div><a href="{{ route('category.create') }}" class="btn btn-primary btn-lg btn-blue col-8 mx-auto">Crear
                categoria</a></div><br>

        @if (session('status'))
            <div class="alert alert-success col-8 mx-auto mb-3">
                {{ session('status') }}
            </div>
        @endif
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
                    <div class="col-md-3 col-sm-6">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Eliminar
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Eliminar categoria</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estas seguro de eliminarlo?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach

        {{ $categorys->links() }}
    </div>

@endsection
