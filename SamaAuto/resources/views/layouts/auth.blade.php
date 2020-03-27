<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <title>SamaAuto</title>
      <base href="/">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">
      <link href="<?php echo asset('css/login.component.css')?>" rel="stylesheet">
    </head>
    <body>
            <div id="contener">

              @yield('content')


            </div>
    </body>
</html>