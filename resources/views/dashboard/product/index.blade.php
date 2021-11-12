@extends('dashboard.main')
@section('body')

    <div class="text-center">
        <div><a href="{{ route('product.create') }}" class="btn btn-primary btn-lg btn-blue col-6 mx-auto">Crear
                producto</a></div><br>

        @if (session('status'))
            <div class="alert alert-success col-6 mx-auto mb-3">
                {{ session('status') }}
            </div>
        @endif
        <div class="card color-grey-db">
            <div class="card-body row">
                <div class="col-lg-1 col-sm-12">ID</div>
                <div class="col-lg-2 col-sm-12">Nombre</div>
                <div class="col-lg-1 col-sm-12">Precio provedor</div>
                <div class="col-lg-1 col-sm-12">Precio venta</div>
                <div class="col-lg-1 col-sm-12">Stock</div>
                <div class="col-lg-2 col-sm-12">Categoria</div>
                <div class="col-lg-2 col-sm-12"></div>
                <div class="col-lg-2 col-sm-12"></div>
            </div>
        </div>
        @foreach ($products as $product)
            <div class="card list-product-tab text-center  mb-3">
                <div class="card-body row">
                    <div class="col-md-1 col-sm-12">{{ $product->id }}</div>
                    <div class="col-md-2 col-sm-12 mb-3">{{ $product->name_product }}</div>
                    <div class="col-md-1 col-sm-12 mb-3">$ {{ $product->price_provider }}</div>
                    <div class="col-md-1 col-sm-12 mb-3">$ {{ $product->price_final }}</div>
                    <div class="col-md-1 col-sm-12 mb-3">{{ $product->stock }}</div>
                    <div class="col-md-2 col-sm-12 mb-3">{{ $product->name_category }}</div>
                    <div class="col-md-2 col-sm-12 mb-3"><a href="{{ route('product.edit', $product->id) }}"
                            class="btn btn-secondary">Actualizar</a>
                    </div>
                    <div class="col-md-2 col-sm-12 mb-3">
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
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
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

        {{ $products->links() }}
    </div>

@endsection
