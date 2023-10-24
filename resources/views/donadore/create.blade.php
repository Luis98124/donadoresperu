@extends('layouts.app')

@section("content")
<head>
<style>
    body {
        background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
        background-size: cover;
    }
    
    .container {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
    }
    
    .title {
        font-size: 24px;
        font-weight: bold;
    }
    
    .form-label {
        font-weight: bold;
    }
    
    .btn-cancel {
        background-color: #dc3545;
        color: #fff;
    }
    
    .btn-save {
        background-color: #007bff;
        color: #fff;
    }
</style>

<div class="text-center">
    <span class="title">Registrarme como Donador</span>
</div>

<form method="POST" action="{{ route('donadore.store') }}">
    @csrf
    <div class="container mt-4">
        <label for="usuario" class="form-label">NOMBRE</label>
        <input id="usuario" name="usuario" type="text" class="form-control" tabindex="1" value="{{ old('usuario') }}">
        @error('usuario')
            <span style="color: rgba(255, 5, 5, 0.8">{{ $message }}</span>
        @enderror
    </div>

    <div class="container mt-4">
        <label for="dni" class="form-label">DNI</label>
        <input id="dni" name="dni" type="number" class="form-control" tabindex="2" value="{{ old('dni') }}">
        @error('dni')
            <span style="color: rgba(255, 5, 5, 0.8">{{ $message }}</span>
        @enderror
    </div>

    <div class="container mt-4">
        <label for="" class="form-label">Estatura</label>
        <input id="talla" name="talla" type="number" class="form-control" tabindex="2" value="{{old('talla')}}">
            @error('talla')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        <div class="container mt-4">
            <label for="" class="form-label">Fecha de Nacimiento</label>
            <input id="fnacimiento" name="fnacimiento" type="date" class="form-control" tabindex="20" value="{{old('fnacimiento')}}">
            @error('fnacimiento')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
            <div class="container mt-4">
                <label for="" class="form-label">PESO</label>
                <input id="peso" name="peso" type="number" class="form-control" tabindex="4" value="{{old('peso')}}">
                    @error('peso')
                        <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                    @enderror
                </div>
                <div class="container mt-4">
                    <label for="" class="form-label">SEXO</label><BR>
                    <input type="radio" name="sexo" value="M" tabindex="5" {{ old('sexo') === 'M' ? 'checked' : '' }}>MASCULINO<br>
                    <input type="radio" name="sexo" value="F" tabindex="6" {{ old('sexo') === 'F' ? 'checked' : '' }}>FEMENINO<br>
                    <input type="radio" name="sexo" value="N/S" tabindex="7" {{ old('sexo') === 'N/S' ? 'checked' : '' }}>PREFIERO NO DECIRLO<br>
                    @error('sexo')
                        <br><span style="color: rgba(255, 5, 5, 0.333)">{{ $message }}</span><br>
                    @enderror
                </div>
                
        <div class="container mt-4">
            <label for="">¿Cual es Tu Tipo de Sangre?</label>
            <br>
            <input type="radio" name="tipo" value="A-" tabindex="10" {{ old('tipo') === 'A-' ? 'checked' : '' }}>A-<br>
            <input type="radio" name="tipo" value="A+" tabindex="11" {{ old('tipo') === 'A+' ? 'checked' : '' }}>A+<br>
            <input type="radio" name="tipo" value="B-" tabindex="12" {{ old('tipo') === 'B-' ? 'checked' : '' }}>B-<br>
            <input type="radio" name="tipo" value="B+" tabindex="13" {{ old('tipo') === 'B+' ? 'checked' : '' }}>B+<br>
            <input type="radio" name="tipo" value="AB-" tabindex="14" {{ old('tipo') === 'AB-' ? 'checked' : '' }}>AB-<br>
            <input type="radio" name="tipo" value="AB+" tabindex="15" {{ old('tipo') === 'AB+' ? 'checked' : '' }}>AB+<br>
            <input type="radio" name="tipo" value="O-" tabindex="16" {{ old('tipo') === 'O-' ? 'checked' : '' }}>O-<br>
            <input type="radio" name="tipo" value="O+" tabindex="17" {{ old('tipo') === 'O+' ? 'checked' : '' }}>O+<br>
            <input type="radio" name="tipo" value="RH-" tabindex="18" {{ old('tipo') === 'RH-' ? 'checked' : '' }}>RH-<br>
            <input type="radio" name="tipo" value="RH+" tabindex="19" {{ old('tipo') === 'RH+' ? 'checked' : '' }}>RH+<br>
    
            @error('tipo')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
    
        <div class="container mt-4">
            <label for="" class="form-label">Fecha de Ultima Donación</label>
            <input id="fecha" name="fecha" type="date" class="form-control" tabindex="20" value="{{old('fecha')}}">
            @error('fecha')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        <div class="container mt-4">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="number" class="form-control" tabindex="2" value="{{old('telefono')}}">
                @error('telefono')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="container mt-4">
                <label for="" class="form-label" >CORREO</label>
                <input id="correo" name="correo" type="email" class="form-control" tabindex="1" value="{{old('correo')}}">
                @error('correo')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>

    <div class="container mt-4">
        <a href="/donadoresperu/public/banner" class="btn btn-cancel" tabindex="21">Cancelar</a>
        <button type="submit" class="btn btn-save" tabindex="22">Guardar</button>
    </div>
</form>
</head>
@endsection
