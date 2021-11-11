@extends('dashboard.main')
@section('body')

    @if (session('status'))
        <div class="alert alert-success col-8 mx-auto">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('category.store') }}" method="POST" class="col-8 mx-auto">
        @csrf
        <div class="form-group ">
            <label for="name_category">Nombre de la categoria</label>
            <input type="text" name="name_category" id="name_category" class="form-control">
            @error('name_category')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <input type="submit" value="Registrar" class="btn btn-primary btn-blue">
    </form>

@endsection
