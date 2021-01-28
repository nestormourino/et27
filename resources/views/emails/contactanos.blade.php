<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <h1> Correo electronico del sitio web</h1>
    <br>

    <p><strong>Nombre:</strong>{{$contacto['name']}}</p>
    <p><strong>Telefono de contacto:</strong>{{$contacto['telephone']}}</p>
    <p><strong>Correo:</strong>{{$contacto['email']}}</p>
    <p><strong>Mensaje:</strong>{{$contacto['message']}}</p>
</body>
</html>