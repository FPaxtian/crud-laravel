<form action="{{ route('category.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name_category">Nombre de la categoria</label>
        <input type="text" name="name_category" id="name_category" class="form-control">
    </div>
    <input type="submit" value="Registrar" class="btn btn-primary">
</form>