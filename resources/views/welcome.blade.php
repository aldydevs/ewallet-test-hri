<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Wallet Simple Apps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{ URL('/') }}">E-Wallet Apps</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link {{ (request()->is('login')) ? 'active' : '' }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link {{ (request()->is('register')) ? 'active' : '' }}">Register</a>
                        @endif
                    @endauth
            @endif

            </ul>
          </div>
        </div>
    </nav>    

    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">Simple E-Wallet Apps</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Simple E-Wallet Apps by Laravel and Bootstrap</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href={{ route('login') }} class="btn btn-primary btn-lg px-4 gap-3">Login</a>
            <a href={{ route('register') }} class="btn btn-outline-secondary btn-lg px-4">Register</a>
          </div>
        </div>
      </div>
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>