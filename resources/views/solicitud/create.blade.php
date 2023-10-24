<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@extends('layouts.app')
<style>
    body {
        background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
    }

    .container {
        max-width: 400px;
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        margin-top: 30px;
    }

    .form-label {
        font-weight: bold;
    }

    .btn-cancel {
        background-color: #dc3545;
        color: white;
    }
</style>
@section('template_title')
{{ __('Create') }} Solicitud
@endsection
@section('content')
<div class="container">
    <form action="/donadoresperu/public/solicitud" method="post">
        @csrf
        <div class="container mt-4">
            <label for="solicitante" class="form-label">SOLICITANTE</label><br>
            <input type="radio" name="solicitante" value="usuario" tabindex="6" {{ old('solicitante') === 'usuario' ? 'checked' : '' }}> PARA MI<br>
            <input type="radio" name="solicitante" value="familiar" tabindex="7" {{ old('solicitante') === 'familiar' ? 'checked' : '' }}> PARA UN FAMILIAR<br>
            @error('solicitante')
            <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>

        <div class="container mt-4">
            <label for="nombre_apellidos" class="form-label">Nombres y Apellidos</label>
            <input id="nombre_apellidos" name="nombre_apellidos" type="text" class="form-control" tabindex="4" value="{{ old('nombre_apellidos') }}">
            @error('nombre_apellidos')
            <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        <div class="container mt-4">
            <label for="DNI" class="form-label">DNI</label>
            <input id="DNI" name="DNI" type="number" class="form-control" tabindex="4" value="{{ old('DNI') }}">
            @error('DNI')
            <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        <div class="container mt-4">
            <label for="">¿Cuál es Tu Tipo de Sangre?</label>
                <br>
                <input type="radio" name="tipo_sangre" value="A-" tabindex="9" {{ old('tipo_sangre') === 'A-' ? 'checked' : '' }}> A-
                <input type=radio name=tipo_sangre value="A+" tabindex=10 {{ old('tipo_sangre') === 'A+' ? 'checked' : '' }}> A+
                <input type=radio name=tipo_sangre value="B-" tabindex=11 {{ old('tipo_sangre') === 'B-' ? 'checked' : '' }}> B-
                <input type=radio name=tipo_sangre value="B+" tabindex=12 {{ old('tipo_sangre') === 'B+' ? 'checked' : '' }}> B+
                <input type=radio name=tipo_sangre value="AB-" tabindex=13 {{ old('tipo_sangre') === 'AB-' ? 'checked' : '' }}> AB-
                <input type=radio name=tipo_sangre value="AB+" tabindex=14 {{ old('tipo_sangre') === 'AB+' ? 'checked' : '' }}> AB+
                <input type=radio name=tipo_sangre value="O-" tabindex=15 {{ old('tipo_sangre') === 'O-' ? 'checked' : '' }}> O-
                <input type=radio name=tipo_sangre value="O+" tabindex=16 {{ old('tipo_sangre') === 'O+' ? 'checked' : '' }}> O+
                <input type=radio name=tipo_sangre value="RH-" tabindex=17 {{ old('tipo_sangre') === 'RH-' ? 'checked' : '' }}> RH-
                <input type=radio name=tipo_sangre value="RH+" tabindex=18 {{ old('tipo_sangre') === 'RH+' ? 'checked' : '' }}> RH+
                @error('tipo_sangre')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
        </div>

        <div class="container mt-4">
            <a href="/donadoresperu/public/solicitud" class="btn btn-cancel" tabindex="17">Cancelar</a>
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </div>
    </form>
</div>
@endsection
