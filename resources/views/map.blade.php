
      <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Map</title>
        <!-- Fonts -->
          
           @vite(['resources/css/map.css', 'resources/js/map.js'])
    </head>
  <body>   
        <input
          id="pac-input"
          class="controls"
          type="text"
          placeholder="Search Box"
        />
        <div id="map" style="width:800px; height:800px; margin: auto"></div>

<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key={{ config("services.google-map.apikey") }}&callback=initAutocomplete&libraries=places&v=weekly"defer></script>

    </body>   
    
</html>
       
