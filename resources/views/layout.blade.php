<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        html{
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .icons{
        }
    </style>
</head>
<body class="bg-dark text-white h-100 d-flex flex-column justify-content-between">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand text-light" href="#">Navbar</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Link</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success text-light" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    <div class="container-fluid gap-3 d-flex flex-column justify-content-around h-75">
        @yield('content')
    </div>
    <footer class="container-fluid d-flex flex-column justify-content-center align-items-center p-3">
        <div class="container d-flex flex-row justify-content-center gap-3">
            <img src="{{ asset('github.svg') }}" alt="">
            <img src="{{ asset('instagram.svg') }}" alt="">
            <img src="{{ asset('linkedin.svg') }}" alt="">
        </div>
        <div class="font-monospace">
            © 2023 Michael Jonathan
        </div>
    </footer>
</body>
</html>


