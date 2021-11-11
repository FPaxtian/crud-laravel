@extends('dashboard.main')
@section('body')

    <div class="body-center row">
        <div class="card col-md-5">
            <div class="card-body">
                <h5 class="card-title">Productos</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary btn-blue">Ir lista productos</a>
            </div>
        </div>
        <div class="col-md-2">
            <br>
        </div>
        <div class="card col-md-5">
            <div class="card-body">
                <h5 class="card-title">Cateogiras</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{ route('category.index') }}" class="btn btn-primary btn-blue">Ir lista categorias</a>
            </div>
        </div>
    </div>

@endsection
