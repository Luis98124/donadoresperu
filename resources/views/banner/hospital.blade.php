<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@extends('layouts.app')
<style>
    body{
        background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
    }
</style>
@section('content')
<script>
    function mostrarMapa(mapUrl) {
      var googleMap = document.getElementById('google-map');
      googleMap.src = mapUrl;
      var mapContainer = document.querySelector('.map-container');
      mapContainer.style.display = 'block';
    }
  </script>
  <style>
    .map-container {
      position: relative;
      width: 100%;
      max-width: 800px; /* Cambia el ancho máximo según tu diseño */
      margin: 0 auto; /* Centra el mapa y los botones horizontalmente */
    }
  
    .map-buttons {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      text-align: center;
      background-image: url('https://marketplace.canva.com/EAEK4dC2olw/1/0/1600w/canva-arco%C3%ADris-gradiente-rosa-y-naranja-fondo-virtual-c3PYha1JI9M.jpg');
      z-index: 1;
      padding: 10px;
    }
  
    .map-wrapper {
      padding-top: 40px; /* Ajusta según la altura de los botones */
    }
  </style>
  <div class="map-container">
    <!-- Botones para cambiar entre los mapas -->
    <div class="map-buttons">
      <button class="btn btn-warning" onclick="mostrarMapa('https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15835.155112137823!2d-78.5166834!3d-7.1504047!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b25aee9be170a9%3A0x35e8c5750a98a8a6!2sESSALUD%20II%20Consultorios!5e0!3m2!1ses-419!2spe!4v1696207306937!5m2!1ses-419!2spe')">ESSALUD II Consultorios</button>
      <button class="btn btn-warning" onclick="mostrarMapa('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.7413321969207!2d-78.5136686!3d-7.1558763999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b25afa4b07b721%3A0x854bc4ffafb173a!2sHOSPITAL%20SIMON%20BOL%C3%8DVAR!5e0!3m2!1ses-419!2spe!4v1696207523716!5m2!1ses-419!2spe')">HOSPITAL SIMON BOLÍVAR</button>
      <button class="btn btn-warning" onclick="mostrarMapa('https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3958.715286986036!2d-78.5099457!3d-7.1588783!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b25ae349c89533%3A0x7a0cfc9e38c905b3!2sEsSalud%20Hospital%20II%20-%20Cajamarca%20-%20Nivel%20II%202!5e0!3m2!1ses-419!2spe!4v1696207761148!5m2!1ses-419!2spe')">EsSalud Hospital II</button>
      <button class="btn btn-warning" onclick="mostrarMapa('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.5025191694094!2d-78.48782609999999!3d-7.183354599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91b25b3867e58765%3A0x37e27ac10c5dce09!2sHOSPITAL%20REGIONAL%20DE%20CAJAMARCA!5e0!3m2!1ses-419!2spe!4v1696207851353!5m2!1ses-419!2spe')">HOSPITAL REGIONAL</button>
    </div>
    
    <!-- El mapa se mostrará aquí cuando se haga clic en un botón -->
    <div class="map-wrapper">
      <iframe id="google-map" width="100%" height="100%" frameborder="0" style="border:0;"></iframe>
    </div>
  </div>
@endsection