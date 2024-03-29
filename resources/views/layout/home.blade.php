<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Page title -->
        <title>Inicio | Dieciocho Oval</title>

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{asset('vendor/fontawesome/css/font-awesome.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/metisMenu/dist/metisMenu.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/animate.css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.css')}}" />

        <!-- App styles -->
        <link rel="stylesheet" href="{{asset('fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" />
        <link rel="stylesheet" href="{{asset('fonts/pe-icon-7-stroke/css/helper.css')}}" />
        <link rel="stylesheet" href="{{asset('styles/style.css')}}" />

    </head>
    <body class="fixed-navbar fixed-sidebar hide-sidebar">
      @yield('content')

    </body>

</html>
