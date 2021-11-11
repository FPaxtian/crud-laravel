@extends('dashboard.main')
@section('body')

    @if (session('status'))
        <div class="alert alert-success col-8 mx-auto">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('category.update', $category->id) }}" method="POST" class="col-8 mx-auto">
        @csrf
        @method('PUT')
        <div class="form-group ">
            <label for="name_category">Nombre de la categoria</label>
            <input type="text" name="name_category" id="name_category" value="{{ $category->name_category }}"
                class="form-control">
            @error('name_category')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <input type="submit" value="Actulizar" class="btn btn-primary btn-blue">
    </form>

@endsection
