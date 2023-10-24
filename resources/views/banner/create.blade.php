@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Registro en Campaña
@endsection
<head>
    <style>

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #a3cdda;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .title{
            font-size: 40px;
            line-height: 1.6;
            text-align: center;
        }
        
    </style>  
</head>

@section('content')
<div class="container">
    <form action="/donadoresperu/public/banner" method="post">
        @csrf
        <div class="container mt-4">
            <label for="" class="form-label" >NOMBRE</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{old('nombre')}}">
            @error('nombre')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        <div class="container mt-4">
            <label for="" class="form-label">APELLIDO</label>
            <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2" value="{{old('apellido')}}">
            @error('apellido')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
       <div class="container mt-4">
        <label for="edad" class="form-label">EDAD</label>
        <input id="edad" name="edad" type="number" class="form-control" tabindex="3" value="{{old('edad')}}">
            @error('edad')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        <div class="container mt-4">
            <label for="">¿Cuál es Tu Tipo de Sangre?</label>
            <br>
            <input type="radio" name="tipo" value="A-" tabindex="4" {{ old('tipo') === 'A-' ? 'checked' : '' }}> A-<br>
            <input type="radio" name="tipo" value="A+" tabindex="5" {{ old('tipo') === 'A+' ? 'checked' : '' }}> A+<br>
            <input type="radio" name="tipo" value="B-" tabindex="6" {{ old('tipo') === 'B-' ? 'checked' : '' }}> B-<br>
            <input type="radio" name="tipo" value="B+" tabindex="7" {{ old('tipo') === 'B+' ? 'checked' : '' }}> B+<br>
            <input type="radio" name="tipo" value="AB-" tabindex="8" {{ old('tipo') === 'AB-' ? 'checked' : '' }}> AB-<br>
            <input type="radio" name="tipo" value="AB+" tabindex="9" {{ old('tipo') === 'AB+' ? 'checked' : '' }}> AB+<br>
            <input type="radio" name="tipo" value="O-" tabindex="10" {{ old('tipo') === 'O-' ? 'checked' : '' }}> O-<br>
            <input type="radio" name="tipo" value="O+" tabindex="11" {{ old('tipo') === 'O+' ? 'checked' : '' }}> O+<br>
            <input type="radio" name="tipo" value="RH-" tabindex="12" {{ old('tipo') === 'RH-' ? 'checked' : '' }}> RH-<br>
            <input type="radio" name="tipo" value="RH+" tabindex="13" {{ old('tipo') === 'RH+' ? 'checked' : '' }}> RH+<br>
            @error('tipo')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
            
        <div class="container mt-4">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="number" class="form-control" tabindex="14" value="{{old('telefono')}}">
            @error('telefono')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        <div class="container mt-4">
            <label for="" class="form-label">DIRECCION DE CORREO</label>
            <input id="email" name="email" type="email" class="form-control" tabindex="15" value="{{old('email')}}">
            @error('email')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        
        <div class="container mt-4">
        <a href="/donadoresperu/public/banner"class="btn btn-success" tabindex="17">Cancelar</a>
        <button type="submit" class="btn btn-primary"tabindex="18">Guardar </button>
        </div>
    </form>
</div>
@endsection
