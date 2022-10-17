<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Desafio Laravel</title>

</head>

<body>
    <nav class="navbar shadow navbar-dark bg-primary fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start d-flex flex-column flex-shrink-0 p-3 bg-light" tabindex="-1"
        id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="width: 280px;">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="/" class="nav-link link-dark" aria-current="page">
                    <i class="bi bi-list-ul me-2"></i>
                    Home
                </a>
            </li>
        </ul>
        <hr>
        <strong>Desafio Laravel</strong>
    </div>

    <div class="container pt-4">

        <div class="row row-cols-1 row-cols-md-2 g-4 pt-5">
            
        </div>
    </div>

    @yield('content')

    <footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="">Guilherme Souza</a>.</strong> All rights
    reserved.
    </footer>
</body>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    
</html>