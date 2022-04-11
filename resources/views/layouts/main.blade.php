<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flexy - Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="antialiased">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-12 margin-tb">
                <div class="pull-left">
                    
                    <h2> @yield('page_title') </h2>
                
                </div>
                
                @yield('content')
                
            </div>
        </div>
        <div class="row justify-content-center m-3">
            <div class="col-2">
                <a href="/products" class="btn btn-primary">Inicio</a>
            </div>
            <div class="col-2">
                <a href="/products/create" class="btn btn-primary">Novo</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>