@extends('dashboard.main')
@section('body')

    @if (session('status'))
        <div class="alert alert-success col-8 mx-auto">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('product.update', $product->id) }}" method="POST" class="col-8 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group ">
            <div class="mb-3">
                <label for="name_product">Nombre del producto</label>
                <input type="text" name="name_product" id="name_product" value="{{ $product->name_product }}"
                    class="form-control">
                @error('name_product')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desct" class="form-label">Descripción del producto</label>
                <textarea class="form-control" name="desct" id="desct" rows="3">{{ $product->desct }}</textarea>
                @error('desct')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price_provider">Precio del provedor</label>
                <input type="text" name="price_provider" id="price_provider" value="{{ $product->price_provider }}"
                    class="form-control">
                @error('price_provider')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price_final">Precio de venta</label>
                <input type="text" name="price_final" id="price_final" value="{{ $product->price_final }}"
                    class="form-control">
                @error('price_final')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stock">Existencias</label>
                <input type="text" name="stock" id="stock" value="{{ $product->stock }}" class="form-control">
                @error('stock')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <div><label class="mb-3" for="id_category">Selecionar una categoria</label></div>
                <select class="form-select pl-2 pr-2 pt-1 pb-1" name="id_category" id="id_category" size="3"
                    aria-label="size 3 select example">
                    @foreach ($categorys as $category)

                        @if (intval(old('id_category')) === intval($category->id) || intval($product->id_category) === intval($category->id))
                            <option value="{{ $category->id }}" selected>{{ $category->name_category }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                        @endif


                    @endforeach
                </select>
                <div class="mb-3">
                    @error('id_category')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>
        </div>
        <input type="submit" value="Registrar" class="btn btn-primary btn-blue">
    </form>

@endsection
