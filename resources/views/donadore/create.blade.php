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

<div class="text-center">
    <span class="title">Registrarme como Donador</span>
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
<div class="form-right"><form method="POST" action="{{ route('donadore.store') }}">@csrf
    <div class="container3">
        <div class="row">
            <div class="col">
                <label for="usuario" class="form-label">NOMBRE</label>
                <a style="font-size: 75%" style=""> *ESCRIBIR SU NOMBRE COMPLETO</a>
                <input id="usuario" name="usuario" type="text" class="form-control" tabindex="1" value="{{ old('usuario')  }}">
                @error('usuario')
                    <span style="color: rgba(255, 5, 5, 0.8">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <label for="dni" class="form-label">DNI</label>
                    <input id="dni" name="dni" type="number" class="form-control" tabindex="2" value="{{old('dni') }}">
                    @error('dni')
                        <span style="color: rgba(255, 5, 5, 0.8">{{ $message }}</span>
                    @enderror

            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">Estatura</label><br>
                <a style="font-size: 75%" style=""> *En Centimetros ej. 165</a>
                <input id="talla" name="talla" type="number" class="form-control" tabindex="3" value="{{old('talla')}}">
                @error('talla')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="col">
                <label for="" class="form-label">Fecha de Nacimiento</label>
                <input id="fnacimiento" name="fnacimiento" type="date" class="form-control" tabindex="4" value="{{old('fnacimiento')}}">
                @error('fnacimiento')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="col">
                <label for="" class="form-label">PESO</label><br>
                <a style="font-size: 75%" > *En kilogramos ej. 65</a>
                <input id="peso" name="peso" type="number" class="form-control" tabindex="5" value="{{old('peso')}}">
                @error('peso')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label">SEXO</label><br>
                <input type="radio" name="sexo" value="M" tabindex="6" {{ old('sexo') === 'M' ? 'checked' : '' }} >MASCULINO
                <input type="radio" name="sexo" value="F" tabindex="7" {{ old('sexo') === 'F' ? 'checked' : '' }}>FEMENINO <br>
                <input type="radio" name="sexo" value="N/S" tabindex="8" {{ old('sexo') === 'N/S' ? 'checked' : '' }}>PREFIERO NO DECIRLO
                @error('sexo')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{ $message }}</span><br>
                    @enderror
            </div>
            <div class="col">
                <label for="" class="form-label">Fecha de Ultima Donación</label><br>
                <a>Dejarla vacia en caso no haya donado nunca</a>
                <input id="fecha" name="fecha" type="date" class="form-control" tabindex="9" value="{{old('fecha')}}">
                @error('fecha')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">La fecha de tu ultima donacion no puede ser menor a tu fecha de nacimiento mas 18 años</span><br>
                @enderror
            </div>

        </div>
        <div class="row">
            <div class="col">
                <label for="">¿Cual es Tu Tipo de Sangre?</label>
                <div class="mb-2"></div>  
                <input type="radio" name="tipo" value="A-" tabindex="10" {{ old('tipo') === 'A-' ? 'checked' : '' }}>A-
                <input type="radio" name="tipo" value="A+" tabindex="11" {{ old('tipo') === 'A+' ? 'checked' : '' }}>A+
                <input type="radio" name="tipo" value="B-" tabindex="12" {{ old('tipo') === 'B-' ? 'checked' : '' }}>B-
                <input type="radio" name="tipo" value="B+" tabindex="13" {{ old('tipo') === 'B+' ? 'checked' : '' }}>B+
                <input type="radio" name="tipo" value="AB-" tabindex="14" {{ old('tipo') === 'AB-' ? 'checked' : '' }}>AB-
                <input type="radio" name="tipo" value="AB+" tabindex="15" {{ old('tipo') === 'AB+' ? 'checked' : '' }}>AB+ <br>
                <input type="radio" name="tipo" value="O-" tabindex="16" {{ old('tipo') === 'O-' ? 'checked' : '' }}>O-
                <input type="radio" name="tipo" value="O+" tabindex="17" {{ old('tipo') === 'O+' ? 'checked' : '' }}>O+
                <input type="radio" name="tipo" value="RH-" tabindex="18" {{ old('tipo') === 'RH-' ? 'checked' : '' }}>RH-
                <input type="radio" name="tipo" value="RH+" tabindex="19" {{ old('tipo') === 'RH+' ? 'checked' : '' }}>RH+
        
                @error('tipo')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>
            <div class="col">
                <label for="" class="form-label">Telefono</label>
                <input id="telefono" name="telefono" type="number" class="form-control" tabindex="20" value="{{old('telefono')}}">
                @error('telefono')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>

        </div>
        <div class="row">
            <div class="col">
                <label for="" class="form-label" >CORREO ELECTRONICO</label>
                <input id="correo" name="correo" type="email" class="form-control" tabindex="21" Disabled value="{{ Auth::user()->email }}">
            </div>

        </div>
        <div class="row">
            <div class="col">
                <input type="radio" name="terminos" value="Aceptada" tabindex="22" {{ old('terminos') === 'Aceptada' ? 'checked' : '' }}> <a href='http://localhost/donadoresperu/public/terminos' target="_blank" rel="noopener"> Acepto Términos y Condiciones</a>
                @error('terminos')
                    <br><span style="color: rgba(255, 5, 5, 0.333)">{{$message}}</span><br>
                @enderror
            </div>

        </div>
                <button id="miBoton" type="submit" class="btn btn-save" tabindex="23">Guardar</button></div>
            </div>
        </form>
    </div>
</div>
</head>
@endsection
