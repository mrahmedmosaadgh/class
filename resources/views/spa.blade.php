@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ config('app.name') }}</title>
 
  <link rel="stylesheet" href="{{ mix('dist/css/app.css') }}">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">




  </head>
<body>
  <div id="app"></div>

  {{-- Global configuration object --}}
  <script>
    window.config = @json($config);
  </script>

  {{-- Load the application scripts --}}
  <script src="{{ mix('dist/js/app.js') }}"></script>
  <!-- <script src="{{ asset('dist/css/moment-with-locales.min.js') }}"></script>
  <script src="{{ asset('dist/css/moment-hijri.js') }}"></script> -->
 

<!-- 
  <script src="http://momentjs.com/downloads/moment-with-locales.min.js"></script> 
    <script src="https://raw.githubusercontent.com/xsoh/moment-hijri/master/moment-hijri.js"></script>  -->
  <!-- <script src="http://momentjs.com/downloads/moment-with-locales.min.js"></script> 
    <script src="https://raw.githubusercontent.com/xsoh/moment-hijri/master/moment-hijri.js"></script>  -->

    
    
</body>
</html>
