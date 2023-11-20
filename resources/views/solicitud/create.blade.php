<<<<<<< HEAD
@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Solicitud
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Solicitud</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('solicituds.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('solicitud.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
=======
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@extends('layouts.app')
@section("content")
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
            margin: 2%
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
            background-color: rgb(49, 124, 26);
            color:#fff;
            float:inline-end;
            margin-right: 3%;
            margin-top: -2.5%;
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
            float: left;
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
 @if(session('formularioEnviado'))
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script>
     $(document).ready(function() {
     // Si el formulario ya ha sido enviado, oculta el botón
     $('#miBoton').hide();
     });
 </script>
@endif   
<div class="text-center">
    <span class="title">Registrar una solicitud de busqueda</span>
    <div class="bt-cancel">
            <a href="/donadoresperu/public/principal" class="btn btn-cancel" tabindex="21">Cancelar</a>       
    </div>
<div class="form-left">
    <body>
        <div class="container1">
            <div class="content">
                <h1 style="text-align: center" >¡Salva Vidas!</h1>
                <h5>Únete a nuestra campaña de donación de sangre y ayuda a quienes más lo necesitan.</h5>
                <!-- Utiliza la URL de la imagen en el atributo src -->
                <img class="responsive-image" src="https://st.depositphotos.com/1007566/3186/v/950/depositphotos_31868859-stock-illustration-donate-blood.jpg" alt="Donación de Sangre">
        
                <div>
                    <h2>¿Por qué donar sangre?</h2>
                    <p style="text-align: justify" >La donación de sangre es un acto de generosidad que puede salvar vidas. Cada donación cuenta y puede marcar la diferencia en la vida de alguien que lo necesita.</p>
        
                    <h2>¿Cómo puedes ayudar?</h2>
                    <p style="text-align: justify">Si estás interesado en donar sangre y ser parte de esta noble causa, ¡te animamos a hacerlo! Puedes encontrar más información y programar una cita de donación haciendo clic en el botón de abajo.</p>
        
                    <a class="donate-button" href="{{route('banner.create')}}">REGISTRARME EN CAMPAÑA</a>
                </div>
            </div>
        </div>
        </body>

</div>
<div class="form-right"><form method="POST" action="{{ route('solicitud.store') }}">@csrf
    <div class="container3">
        <div class="row">
            <div class="col">
                <label for="solicitante" class="form-label">SOLICITANTE</label><br>
                <input type="radio" name="solicitante" value="usuario" tabindex="6" {{ old('solicitante') === 'usuario' ? 'checked' : '' }}> PARA MI<br>
                <input type="radio" name="solicitante" value="familiar" tabindex="7" {{ old('solicitante') === 'familiar' ? 'checked' : '' }}> PARA UN FAMILIAR<br>
                @error('solicitante')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="col">
                <label for="nombre_apellidos" class="form-label">Nombres y Apellidos</label>
                <input id="nombre_apellidos" name="nombre_apellidos" type="text" class="form-control" tabindex="4" value="{{old('nombre_apellidos')}}">
                @error('nombre_apellidos')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror

            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="DNI" class="form-label">DNI</label>
                <input id="DNI" name="DNI" type="number" class="form-control" tabindex="4" value="{{ old('DNI') }}">
                @error('DNI')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="col">
                <label for="">¿Cuál es el Tipo de Sangre a Solicitar?</label>
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
            
        </div>
        <div class="row">
            <div class="col">
                <input type="radio" name="terminos" value="Aceptada" tabindex="16" {{ old('terminos') === 'Aceptada' ? 'checked' : '' }}> <a href='http://localhost/donadoresperu/public/terminos' target="_blank" rel="noopener"> Acepto Términos y Condiciones</a>
                @error('terminos')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>

        </div>
        <div class="row">
            <div class="col">
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </div>

        </div>
        </form>
    </div>
</div>
<<<<<<< HEAD
>>>>>>> gula
=======
</head>
>>>>>>> gula
@endsection
















