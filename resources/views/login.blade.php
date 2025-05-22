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
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <label for="email" style="margin-top:-155px;position: absolute;">Email</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            <br><br><br>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <br><br>

            <button type="submit" class="app-sidebar-link active">
                <p class="text-xl font-semibold">LOG IN</p>
            </button>
        </form>
        <a href="{{ route('register') }}" class="app-sidebar-link active" style="margin-left: 10px;width:100px;">
            <p class="text-xl font-semibold">REGISTER</p>
        </a>
    </div>
</body>
</html>