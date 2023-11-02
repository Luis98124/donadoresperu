@extends('layouts.app')

<style>
    body {
        background-image: url("https://images.unsplash.com/photo-1603366615917-1fa6dad5c4fa?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fHw%3D");
    }
    .card {
        background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
        border: none;
        box-shadow: 0 0 10px #00bfff6a;
        border-radius: 10px;
    }
    .card-header {
        color:#000000;
        text-align: center;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .card-body {
        padding: 300px;
    }
    .form-label {
        color: #333; /* Color del texto de las etiquetas */
    }
    .form-control {
        border: 2px solid #ccc; /* Borde de los campos de entrada */
        border-radius: 5px;
    }
    .btn-primary {
        background-color: #84CD0E;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
    }
    .btn-primary:hover {
        background-color: #6A9C0A; /* Cambio de color al pasar el ratón */
    }
</style>

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">INICIAR SESIÓN</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">DIRECCIÓN DE CORREO</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">CONTRASEÑA</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">RECORDAR</label>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">INGRESAR</button>
                        </div>
                        <div class="text-center mt-3">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('register') }}" style="color:#fffff">CONTRASEÑA OLVIDADA</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
