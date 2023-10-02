<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @extends('layouts.app')
    <style>
        body{
            background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
        }
    </style>
@section("content")
<head>
    <style>

        .container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #a3cdda;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .label {
            font-size: 40px;
            line-height: 1.6;
            text-align: center;
        }
    </style>  
</head>


<form method="POST" action="{{ route('donadore.store') }}">
    @csrf
    <div class="container mt-4">
        <label for="" class="form-label" >NOMBRE</label>
        <input id="usuario" name="usuario" type="text" class="form-control" tabindex="1" value="{{old('usuario')}}">
        @error('usuario')
            <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
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
        <label for="" class="form-label">EDAD</label>
        <input id="edad" name="edad" type="number" class="form-control" tabindex="2" value="{{old('edad')}}">
            @error('edad')
                <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
            @enderror
        </div>
        <div class="container mt-4">
            <label for="" class="form-label">PESO</label>
            <input id="peso" name="peso" type="number" class="form-control" tabindex="2" value="{{old('peso')}}">
                @error('peso')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="container mt-4">
        <label for="" class="form-label">SEXO</label>
        <input id="sexo" name="sexo" type="text" class="form-control" tabindex="1" value="{{old('sexo')}}">
        @error('sexo')
            <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
        @enderror
    </div>
    <div class="container mt-4">
        <label for="" class="form-label">TIPO DE SANGRE</label>
        <a> A-,B-,AB-,O-,RH-,A+,B+,AB+,O+,RH+</a>
        <input id="tipo" name="tipo" type="text" class="form-control" tabindex="2" value="{{old('tipo')}}">
        @error('tipo')
            <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
        @enderror
    </div>
    <div class="container mt-4">
        <label for="" class="form-label">Fecha</label>
        <input id="fecha" name="fecha" type="date" class="form-control" tabindex="2" value="{{old('fecha')}}">
        @error('fecha')
            <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
        @enderror
    </div>
    <div class="container mt-4">
    <a href="/donadoresperu/public/banner"class="btn btn-success" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary"tabindex="6">Guardar</button>
    </div>
</form>
    
@endsection