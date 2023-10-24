<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @extends('layouts.app')

@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #1d5768;
        color: #fff;
        text-align: center;
        padding: 5px;
        box-shadow: 0 0 500px #18aad7;
    }

    h1 {
        font-size: 36px;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 500px #18aad7;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
        
    }

    .donate-button {
        display: inline-block;
        background-color: #18aad7;
        color: #fff;
        padding: 10px 20px;
        font-size: 20px;
        text-decoration: none;
        border-radius: 29px;
        margin-top: 10px;
        
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
        height: auto;
        float: right; /* Coloca la imagen a la derecha */
        margin: 20px auto;
    }
</style>   
</head>
<body>
<header>
    <h1>¡Salva Vidas!</h1>
    <p>Únete a nuestra campaña de donación de sangre y ayuda a quienes más lo necesitan.</p>
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

   