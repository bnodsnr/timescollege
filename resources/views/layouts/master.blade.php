<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>BMS NEPAL</title>
  <link rel="stylesheet" href="{{asset('assets/css/materials_icons.css')}}">
  
  <link rel="shortcut icon" href="{{asset('assets/css/bootsrtap.min.css') }}" />
</head>

  <body>
    @include('layouts.header')
    @yield('content')
  </body>
</html>