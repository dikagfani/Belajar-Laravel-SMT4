<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <main class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg bg-danger">
      <div class="container-fluid px-5">
        <a class="navbar-brand text-white" href="#">FANBASE | TIMNAS INDONESIA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="/posts">Berita Timnas</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
          <button class="btn btn-warning mx-3" type="submit">Login</button>
        </div>
      </div>
    </nav>
    
    @yield('content')

    <footer class="container pt-3 mt-4 text-body-secondary border-top">
      © {{ date('Y') }} FANBASE - Timnas Indonesia
    </footer>
  </main>
</body>

</html>