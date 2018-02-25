<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Inventory @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('inventory.index') }}">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('inventory') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('inventory.index') }}">inventory</a>
      </li>
      <li class="nav-item {{ Request::is('sale') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('sale.index') }}">Total Sales Report</a>
      </li>
      <li class="nav-item {{ Request::is('sale/today') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('sale.today') }}">Todays Report</a>
      </li>
      <li class="nav-item {{ Request::is('inventory/create') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('inventory.create') }}">add items</a>
      </li>
      <li class="nav-item {{ Request::is('sale/create') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('sale.create') }}">add sales</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a onclick="event.preventDefault(); document.querySelector('form').submit()" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{auth()->user()->name}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form method="post" action="{{ route('logout') }}" class="d-none">
            @csrf
          </form>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
  @yield('content')

  <div class='bg-dark text-white p-5'>
    <div class='container'>
      <h2>UY23 Inventory Management application</h2>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
  @yield('script')
</body>
</html>
