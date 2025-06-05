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
        <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
            @csrf
            <label for="email">Email</label>
            <input type="text" id="email" name="email"  required autofocus>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <div class="button-group">
                <button type="submit" class="btn" >LOG IN</button>
                <a href="{{ route('registrar') }}" class="btn secondary">REGISTER</a>
            </div>
        </form>
    </div>
</body>

</html>