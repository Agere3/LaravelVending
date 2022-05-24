<!DOCTYPE html>
<html lang="es">
<head>
<title>LARAVENDING</title>
<meta charset="UTF-8">

<style>
.header{
    background-color: #2175bc;
}
ul {
    margin: 0;
    padding: 10px;
}
    ul li {
    display: inline;
}
ul li a {
    font-family: Arial;
    font-size: 11px;
    text-decoration: none;
    padding: 10px;
    background-color: #2175bc;
    color: #fff;
}

#centrar {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}

h1, h2{
    margin-left: 8px;
}

#products{
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}

table{
    margin-top: 72px;
}

img{
    width: 8vw;
    height: 20vh;
}
</style>
</head>

<body>
    <div class='header'>
        <h1>LARAVENDING</h1>
        <h2>Hola {{auth()->user()->name}}</h2>

        <nav>
            <ul>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="#" onclick="this.closest('form').submit()">Log out</a>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    @yield('principal')
</body>
</html>
