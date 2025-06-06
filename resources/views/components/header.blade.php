<div class="app-header">
    <span class="app-icon"></span>
    <p class="app-name">Portfolio</p>
    <div class="search-wrapper">
        <input class="search-input" type="text" placeholder="Search">
     </div>
     <button class="profile-btn">
        @php
            $user=auth()->user();
            $nombreUsuarioLogueado=$user->name;   
            $rutaImagen=$user->profile_photo;
        @endphp
        <img src="{{asset('storage/'.$rutaImagen)}}" alt="Foto de perfil">
        <span>{{$nombreUsuarioLogueado}}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <h2>LOG OUT </h2>
            <button class="btn btn-primary" id="edit-task-btn" style="outline:2px solid none;background-color:#1f1c2e;" type="submit">
                <i class="fa-solid fa-right-from-bracket" style="color:white;"></i>
            </button>
        </form>
     </button>
</div>