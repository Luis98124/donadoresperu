<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@extends('layouts.app')
<style>
    body {
        background-image: url("https://images.unsplash.com/photo-1603366615917-1fa6dad5c4fa?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fHw%3D");
    }
</style>
@section('content')
<head>
    <style>
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');

            box-shadow: 0 0 10px rgba(60, 172, 236, 0.1);
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
            text-align: center;
            overflow-x: ;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 25px;
            line-height: 1.6;
            text-align: center;
        }
        p {
            font-size: 15px;
            line-height: 1.6;
            text-align: center;
        }
        ul{
            text-align-last: center;
        }
    </style>  
</head>
<body>
    <div class="container mt-4">
        <h1>Donación de Sangre</h1>
        <p>Salva vidas con tu generosidad</p>
    </div>

    <div class="container mt-4">
        <section>
            <h2>¿Por qué donar sangre?</h2>
            <p>La donación de sangre es un acto de altruismo que puede salvar vidas. Cada donación de sangre se utiliza en hospitales para pacientes que necesitan transfusiones debido a cirugías, accidentes, enfermedades y más. Tu donación puede marcar la diferencia entre la vida y la muerte para alguien.</p>
        </section>

        <section>
            <h2>Requisitos para Donar Sangre</h2>
            <ul>
                <li>Ser mayor de 18 años.</li>
                <li>Estar en buen estado de salud.</li>
                <li>Pesar al menos 50 kg.</li>
                <li>No haber donado sangre en los últimos 2 meses.</li>
                <li>No tener enfermedades infecciosas.</li>
            </ul>
        </section>

        <section>
            <h2>Proceso de Donación</h2>
            <ol>
                <li>Registro y revisión de requisitos.</li>
                <li>Evaluación médica.</li>
                <li>Donación de sangre.</li>
                <li>Recuperación con refrigerios.</li>
            </ol>
        </section>
    </div>
</body>
</html>  
@endsection
