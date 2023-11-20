<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @extends('layouts.app')

@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        background-image: url("https://images.unsplash.com/photo-1603366615917-1fa6dad5c4fa?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fHw%3D");

    }

    header {
        background-color: #000000;
        color: #fff;
        text-align: center;
        margin: 0;
        padding: 5px;
        box-shadow: 0 0 500px #046786;
    }

    h1 {
        font-size: 36px;
        color: #fff;
    }
    h2 {
        color: #000000;
    }

    .container {
        margin-left: 10%;
        text-align: justify;
        max-width: 800px;
        margin: 0px auto;
        padding: 20px;
        background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
        box-shadow: 0 0 500px #046786;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
        color: #000000;
        
    }

    .donate-button {
        display: inline-block;
        background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
        color: #000000;
        padding: 10px 20px;
        font-size: 20px;
        text-decoration: none;
        border-radius: 29px;
        margin-left: 10%;+
        
    }

    .donate-button:hover {
            background-color: #18aad7;
        }

    .content {
        display: flex;
        align-items: flex-start; /* Alinea el contenido arriba */
        justify-content:space-around; /* Espacio entre la imagen y el texto */
    }

    .responsive-image {
        max-width: 50%;
        height:auto;
        float: right; /* Coloca la imagen a la derecha */
        margin: 21px auto;
    }
</style>   
</head>
<body>
    @if(session('success'))
        <div id="success-popup" class="alert alert-info" role="alert" style="width:fit-content;" style="float:unset">
            {{ session('success') }}
        </div>
        <script>
            // Muestra la ventana emergente durante 3 segundos
            setTimeout(function() {
            document.getElementById('success-popup').style.display = 'none';}, 3000);
        </script>
    @endif            
<header>
    <h1>¡Salva Vidas!</h1>
    <h5>Únete a nuestra campaña de donación de sangre y ayuda a quienes más lo necesitan.</h5>
</header>

<div class="container">
    <div class="content">
        <!-- Utiliza la URL de la imagen en el atributo src -->
        <img class="responsive-image" src="https://st.depositphotos.com/1007566/3186/v/950/depositphotos_31868859-stock-illustration-donate-blood.jpg" alt="Donación de Sangre">

        <div>
            <h2>¿Por qué donar sangre?</h2>
            <p>La donación de sangre es un acto de generosidad que puede salvar vidas. Cada donación cuenta y puede marcar la diferencia en la vida de alguien que lo necesita.</p>

            <h2>¿Cómo puedes ayudar?</h2>
            <p>Si estás interesado en donar sangre y ser parte de esta noble causa, ¡te animamos a hacerlo! Puedes encontrar más información y programar una cita de donación haciendo clic en el botón de abajo.</p>

            <a class="donate-button" href="{{route('banner.create')}}">REGISTRARME EN CAMPAÑA</a>
        </div>
    </div>
</div>
</body>

@endsection

   