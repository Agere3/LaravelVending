<!DOCTYPE html>
<html lang="es">
<head>
<title>LARAVENDING detalle</title>
<meta charset="UTF-8">


</head>

<body>
    <div class='header'>
        <form action="/productos" method="GET">
            @csrf
            <button>Retroceder</button>
        </form>
        </nav>
    </div>
    @yield('principal')
</body>
</html>
