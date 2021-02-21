<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Prueba Edwin Samir</title>
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <!-- simplebar CSS-->
        @include('layouts.partials.css')
        @yield('css')
</head>
<body>
    <div class="container">
          @yield('content')
    </div>
        @include('layouts.partials.javascripts')
    </body>
</html>
