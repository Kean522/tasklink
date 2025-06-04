<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/login.css'])
</head>
<body>
    <p class="titulo">TaskLink</p>

    <div class="contenido">
        <form method="POST" action="#">
            @csrf
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre"  required autofocus>

            <label for="email">Email</label>
            <input type="text" id="email" name="email"  required autofocus>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirmar contraseña</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <div class="button-group">
                <a class="btn" href="{{route('logeado')}}" >Already Registerd?</a>
                <a href="{{route('registrar')}}" class="btn secondary">REGISTER</a>
            </div>
           
        </form>
    </div>
</body>

</html>