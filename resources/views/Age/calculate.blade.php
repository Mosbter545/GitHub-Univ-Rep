<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php      ?> 

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center">Calculadora de Edad</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                                    <p class="lead"> Año de Nacimiento = {{$birth_year}}</p>
                        </div>
                        <div class="mb-3">
                                    <p class="lead"> Año Actual = {{$current_year}}</p>
                        </div>

                        <div class="mt-4 p-3 bg-light rounded">
                            <h4>Resultado:</h4>
                                    <p class="lead"> Su edad es = {{$current_age}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>