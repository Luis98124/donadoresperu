<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @extends('layouts.app')
@section("content")

<form action="/donadoresperu/public/banner" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label" >NOMBRE</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">APELLIDO</label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">EDAD</label>
        <input id="edad" name="edad" type="number" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">TIPO DE SANGRE</label>
        <input id="tipo" name="tipo" type="number" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">telefono</label>
        <input id="telefono" name="telefono" type="number" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">DIRECCION DE CORREO</label>
        <input id="email" name="email" type="email" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">COMENTARIO</label>
        <input id="comentario" name="comentario" type="text" class="form-control" tabindex="1">
    </div>

    <a href="/donadoresperu/public/banner"class="btn btn-success" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary"tabindex="6">Guardar</button>
</form>
    
@endsection