<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css&quot; rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"&gt; <!-- Iconos de Bootstrap -->
    <title>@yield("titulo")</title>
</head>
<body>
 
    <div class="d-flex">
        <!-- Incluye un menu -->
          @yield("content")
    </div>
    <!-- Scripts de boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js&quot; integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <!-- Scripts adicionales -->
    <!-- Solo incluye los scripts si la sección existe -->
       @hasSection('scripts')
       @yield('scripts')
   @endif
</body>
<footer>
    @yield('autores')
</footer>
</html>