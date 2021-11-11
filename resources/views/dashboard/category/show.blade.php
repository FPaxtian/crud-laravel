@extends('dashboard.main')
@section('body')

    @if (session('status'))
        <div class="alert alert-success col-8 mx-auto">
            {{ session('status') }}
        </div>
    @endif

    @csrf
    <div class="form-group ">
        <label for="name_category">Nombre de la categoria</label>
        <input readonly type="text" name="name_category" id="name_category" value="{{ $category->name_category }}"
            class="form-control">
        @error('name_category')
            <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>


@endsection
