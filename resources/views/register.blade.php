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
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name"  required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email"  required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirmar contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <label for="perfil">Foto de perfil</label>
            <input type="file" name="archivo" accept="image/*" style="outline:2px solid none;">

            <div class="button-group">
                <a class="btn" href="{{route('logeado')}}" >Already Registerd?</a>
                <button type="submit" class="btn secondary">REGISTER</a>
            </div>
           
        </form>
    </div>
</body>

</html>