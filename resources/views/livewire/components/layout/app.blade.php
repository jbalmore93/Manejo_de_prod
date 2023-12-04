<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        @yield('title')
        </title>
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
@livewireStyles
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body >
    <div class="text-white">
    <nav class=" navbar navbar-expand-lg bg-light border-body border-bottom text-light" >
  <div class="text-white container-fluid">
    <a class="navbar-brand" href="{{route('dashboard')}}"><i class='bx bx-home-alt'></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{route('producto')}}">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('proveedor')}}">Proveedores</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
    <div class="m-3 p-2">
    @yield('contenido')
    </div>
@yield('script')
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
@livewireScripts
    </body>
</html>
