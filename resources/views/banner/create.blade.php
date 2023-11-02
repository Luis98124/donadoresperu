@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Registro en Campaña
@endsection

@section('content')
<head>
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1603366615917-1fa6dad5c4fa?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fHw%3D");
            background-size: cover;
        }
        
        .col {
            background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
            padding: 20px;
            width:fit-content; 
            border-radius: 10px;
            margin: 2%;
            box-shadow: 0 0 10px #000000;
        }
        .container1 {
            background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
            padding: 20px;
            width: 120%; 
            border-radius: 10px;
            margin-top: 20px;
        }
        .container3 {
            padding: 20px;
            width:80%; 
            float: right;
            margin-right: 5%;
            border-radius: 1%;
        }
        header {
            background-color: #000000;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 5px;
            box-shadow: 0 0 500px #046786;
        }
        .responsive-image {
            max-width: 50%;
            height:auto;
            width: 30%;
            float: left; /* Coloca la imagen a la derecha */
            margin: 21px;
        }
        
        .title {
            color: #fff;
            font-size: 30px;
            font-weight: bold;
        }
        
        .form-label {
            font-weight: bold;
        }
        
        .btn-cancel {
            color: #fff;
            float:inline-end;
            margin-right: 3%;
            margin-top: 1%;
            margin-bottom: 1.2%
        }
        
        .btn-save {
            background-color: #007bff;
            color: #fff;
            margin: 21px;
        }
        
        .form-left {
            float: left;
            width: 40%; /* Adjust this width as needed */
            padding-right: 20px; /* Add some spacing between the form and the left column */
        }
        
        .form-right {
            float: right;
            width: 60%; /* Adjust this width as needed */
        }
        .donate-button {
        display: inline-block;
        background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
        color: #000000;
        padding: 10px 20px;
        font-size: 20px;
        text-decoration: none;
        border-radius: 29px;    
        margin-left: 0%;
        
    }

    .donate-button:hover {
            background-color: #18aad7;
        }
    </style>
</head>
 <form action="/donadoresperu/public/banner" method="post">
<div class="text-center">
   
        @csrf
        <span class="title">FORMULARIO DE REGISTRO EN CAMPAÑAS DE DONACIÓN </span>
        <div class="btn-cancel">
            <a href="/donadoresperu/public/banner"class="btn btn-success" tabindex="16" >Cancelar</a>
        </div>     
<div class="form-left">
    <body>
        <div class="container1">
            <div class="content">
                <h1 style="text-align: center" >¡Salva Vidas!</h1>
                <h5>Únete a nuestra campaña de donación de sangre y ayuda a quienes más lo necesitan.</h5>
                <!-- Utiliza la URL de la imagen en el atributo src -->        
                <div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vhPoZ_tMBWo?si=fi0z6jACLodgqk6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </body>

</div>
<div class="form-right">
    <div class="container3">
        <div class="row">
            <div class="col">
                <label for="" class="form-label" >NOMBRE</label>
                <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{old('nombre')}}">
                @error('nombre')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="col">
                <label for="" class="form-label">APELLIDO</label>
                <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2" value="{{old('apellido')}}">
                @error('apellido')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="fecha" class="form-label">FECHA DE NACIMIENTO</label>
                <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3" value="{{old('fecha')}}">
                    @error('fecha')
                        <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                    @enderror
            </div>
            <div class="col">
                <label for="" class="form-label">Telefono</label>
                <input id="telefono" name="telefono" type="number" class="form-control" tabindex="4" value="{{old('telefono')}}">
                @error('telefono')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="col">
                <label for="" class="form-label">DIRECCION DE CORREO</label>
                <input id="email" name="email" type="email" class="form-control" tabindex="5" value="{{old('email')}}">
                @error('email')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">¿Cual es Tu Tipo de Sangre?</label>
                <div class="mb-2"></div>  
                <input type="radio" name="tipo" value="A-" tabindex="6" {{ old('tipo') === 'A-' ? 'checked' : '' }}>A-
                <input type="radio" name="tipo" value="A+" tabindex="7" {{ old('tipo') === 'A+' ? 'checked' : '' }}>A+
                <input type="radio" name="tipo" value="B-" tabindex="8" {{ old('tipo') === 'B-' ? 'checked' : '' }}>B-
                <input type="radio" name="tipo" value="B+" tabindex="9" {{ old('tipo') === 'B+' ? 'checked' : '' }}>B+
                <input type="radio" name="tipo" value="AB-" tabindex="10" {{ old('tipo') === 'AB-' ? 'checked' : '' }}>AB-
                <input type="radio" name="tipo" value="AB+" tabindex="11" {{ old('tipo') === 'AB+' ? 'checked' : '' }}>AB+ <br>
                <input type="radio" name="tipo" value="O-" tabindex="12" {{ old('tipo') === 'O-' ? 'checked' : '' }}>O-
                <input type="radio" name="tipo" value="O+" tabindex="13" {{ old('tipo') === 'O+' ? 'checked' : '' }}>O+
                <input type="radio" name="tipo" value="RH-" tabindex="14" {{ old('tipo') === 'RH-' ? 'checked' : '' }}>RH-
                <input type="radio" name="tipo" value="RH+" tabindex="15" {{ old('tipo') === 'RH+' ? 'checked' : '' }}>RH+
        
                @error('tipo')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="radio" name="terminos" value="Aceptada" tabindex="16" {{ old('terminos') === 'Aceptada' ? 'checked' : '' }}> <a href='http://localhost/donadoresperu/public/terminos' target="_blank"> Acepto Términos y Condiciones</a>
                @error('terminos')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>

        </div>
        <div class="row1"style="text-align: center">
            <div class="bt">
                <button type="submit" class="btn btn-primary"tabindex="17">Guardar </button>
                
            </div>
        </div>
    </div>
    
</div>  
</div>     
</form>

@endsection
