 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css">

<!-- jQuery y Select2 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/index.css', 'resources/js/index.js'])
    
    <title>Document</title>

    
</head>
<body>
    <div class="app-container">
    <br>
    <div class="app-header">
        <span class="app-icon"></span>
        
            <p class="app-name">Portfolio</p>
            
            <div class="search-wrapper">
                <input class="search-input" type="text" placeholder="Search">
            </div>
        <br>
        <br>
        <button class="messages-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" /></svg>
        </button>

        
            

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <button class="btn btn-primary" id="edit-task-btn" style="outline:2px solid none;background-color:#1f1c2e;" type="submit">
        <i class="fa-solid fa-right-from-bracket" style="color:white;"></i>
    </button>
</form>
        </button>
        {{-- <h2>LOG OUT </h2>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <button class="btn btn-primary" id="edit-task-btn" style="outline:2px solid none;background-color:#1f1c2e;">
                <i class="fa-solid fa-right-from-bracket" style="color:white;"></i>
        </button> --}}

        
    </div>
    
    <div class="app-content">
        <div class="projects-section">
        <div class="projects-section-header">
            <p>Projects</p>
       {{-- <button class="custom-btn btn-14">Crear Proyecto</button> --}}
            <h2 style="outline:2px solid none;color: #1f1c2e;text-align:center;"  >Añadir Tarea</h2>
            <a href="" class="app-sidebar-link active"  style="position: absolute;margin-top:60px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </a>
            <p class="time">December, 12</p>
        </div>
        <div class="projects-section-line">
            <div class="projects-status">
            <div class="item-status">
                <span class="status-number">45</span>
                <span class="status-type">In Progress</span>
            </div>
            <div class="item-status">
                <span class="status-number">24</span>
                <span class="status-type">Upcoming</span>
            </div>
            <div class="item-status">
                <span class="status-number">62</span>
                <span class="status-type">Total Projects</span>
            </div>
            </div>
           
        </div>
        {{-- <div class="project-boxes jsGridView">
            <div class="project-box-wrapper">
            <div class="project-box" style="background-color: #fee4cb;">
                <div class="project-box-header">
                <span>December 10, 2020</span>
                <div class="more-wrapper">
                    <button class="project-btn-more">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                        <circle cx="12" cy="12" r="1" />
                        <circle cx="12" cy="5" r="1" />
                        <circle cx="12" cy="19" r="1" /></svg>
                    </button>
            </div>
            </div>
            <div class="project-box-content-header">
            <p class="box-content-header">Web Designing</p>
            <p class="box-content-subheader">Prototyping</p>
            </div>
            <div class="box-progress-wrapper">
            <p class="box-progress-header">Progress</p>
            <div class="box-progress-bar">
                <span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
            </div>
            <p class="box-progress-percentage">60%</p>
            <div class="days-left editar" style="color: #4f3ff0;">
                Editar
            </div>
            <div class="days-left ver" style="color: #4f3ff0;">
                Ver
            </div>
            </div>
            <div class="project-box-footer">
            <div class="participants">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
                <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
                <button class="add-participant" style="color: #ff942e;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                </button>
            </div>
            <div class="days-left" style="color: #ff942e;">
                2 Days Left
            </div>
            </div>
        </div>
        </div>
        <div class="project-box-wrapper">
        <div class="project-box" style="background-color: #e9e7fd;">
            <div class="project-box-header">
            <span>December 10, 2020</span>
            <div class="more-wrapper">
                <button class="project-btn-more">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
            </div>
            </div>
            <div class="project-box-content-header">
            <p class="box-content-header">Testing</p>
            <p class="box-content-subheader">Prototyping</p>
            </div>
            <div class="box-progress-wrapper">
            <p class="box-progress-header">Progress</p>
            <div class="box-progress-bar">
                <span class="box-progress" style="width: 50%; background-color: #4f3ff0"></span>
            </div>
            <p class="box-progress-percentage">50%</p>
            <div class="days-left editar" style="color: #4f3ff0;">
                Editar
            </div>
            <div class="days-left ver" style="color: #4f3ff0;">
                Ver
            </div>
            </div>
            <div class="project-box-footer">
            <div class="participants">
                <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="participant">
                <img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="participant">
                <button class="add-participant" style="color: #4f3ff0;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                </button>
            </div>
            <div class="days-left" style="color: #4f3ff0;">
                2 Days Left
            </div>
            </div>
        </div>
        </div>
        <div class="project-box-wrapper">
        <div class="project-box">
            <div class="project-box-header">
            <span>December 10, 2020</span>
            <div class="more-wrapper">
                <button class="project-btn-more">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
            </div>
            </div>
            <div class="project-box-content-header">
            <p class="box-content-header">Svg Animations</p>
            <p class="box-content-subheader">Prototyping</p>
            </div>
            <div class="box-progress-wrapper">
            <p class="box-progress-header">Progress</p>
            <div class="box-progress-bar">
                <span class="box-progress" style="width: 80%; background-color: #096c86"></span>
            </div>
            <p class="box-progress-percentage">80%</p>
            <div class="days-left editar" style="color: #4f3ff0;">
                Editar
            </div>
            <div class="days-left ver" style="color: #4f3ff0;">
                Ver
            </div>
            </div>
            <div class="project-box-footer">
            <div class="participants">
                <img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
                <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="participant">
                <button class="add-participant" style="color: #096c86;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                </button>
            </div>
            <div class="days-left" style="color: #096c86;">
                2 Days Left
            </div>
            </div>
        </div>
        </div>
         --}}
          <div class="project-box-wrapper">  
            
            @if($proyectosDisponibles->isNotEmpty())
                @foreach($proyectosDisponibles as $proyecto)

                    @php
                        $colores = $proyecto->color_font;
                        $color = explode(",", $colores);
                    @endphp
                    
                    <div class="project-box" style="background-color:{{$proyecto->color_project}}" id="project-box">
                        <div class="project-box-header">
                            @php
                                $mesesCastellano = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio","Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                $mesesIngles = array( "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" );
                                $fechaCreacionProyecto=new DateTime($proyecto->due_date);
                                $nombreMesProyecto=$fechaCreacionProyecto->format('F');
                                $nombreMesProyectoTraducido=str_replace($mesesIngles,$mesesCastellano,$nombreMesProyecto);

                                $diaCreacionProyecto=$fechaCreacionProyecto->format('d');
                                $anoCreacionProyecto=$fechaCreacionProyecto->format('Y');
                            @endphp
                            
                            <span style="color:{{$color[0]}}">{{$nombreMesProyectoTraducido." ".$diaCreacionProyecto.", ".$anoCreacionProyecto;}}</span>
                            <div class="more-wrapper">
                                <button class="project-btn-more">
                                <svg xmlns="http://www.w3.org/2000/svg" style="z-index:-1;" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1" />
                                    <circle cx="12" cy="5" r="1" />
                                    <circle cx="12" cy="19" r="1" /></svg>
                                </button>
                                <div class="modal-project-options" style="display:none;">
                    <p onclick="editarProyecto({{$proyecto}},{{$proyecto->users}})">Editar</p>
                    <hr>
                    <p onclick="confirmarEliminado({{$proyecto->id}})">Eliminar</p>
                    <div class="triangle" style="
                        position: absolute;
                        z-index:1;
                        width: 0;
                        height: 0;
                        border-left: 10px solid transparent;
                        border-right: 10px solid transparent;
                        border-top: 30px solid #f3f6fd;margin-left:598px;margin-left:58px;margin-top:-16px;">
                    </div>
                </div>
                            </div>
                        </div>
                        <div class="project-box-content-header">
                            <p class="box-content-header" style="color:{{$color[1]}}">{{$proyecto->name}}</p>
                            <p class="box-content-subheader" style="color:{{$color[2]}}">{{$proyecto->description}}</p>
                            {{-- <p class="box-content-header">{{$proyecto->name}}</p>
                            <p class="box-content-subheader">{{$proyecto->description}}</p> --}}
                        </div>
                        <div class="box-progress-wrapper">
                            <p class="box-progress-header" style="color:{{$color[3]}}">Progress</p>
                            <div class="box-progress-bar">
                                <span class="box-progress" style="background:{{$proyecto->color_progress_bar}}"></span>
                            </div>
                            <p class="box-progress-percentage" style="color:{{$color[4]}}">20%</p>
                            <div class="days-left editar" style="color:{{$color[5]}}">
                            <p>Editar</p> 
                            </div>
                            <div class="days-left ver" style="color:{{$color[6]}}">
                                <p>Ver</p>
                            </div>
                        </div>
                        <div class="project-box-footer">
                        <div class="participants">
                            {{-- Participantes --}}
                            {{-- C:/laragon\www\tasklink\storage\app\public\profiles\01iei3EjjfXMgLDUpvGSjFboBJrRwiMUlKMMLdeP.jpg --}}
                            {{-- profiles/DeAUpz4ikJpcdklmCXZfUDPtpny8CToEvnMCnwXy.jpg
                            <img src="C:/laragon/www/tasklink/storage/app/public/profiles/01iei3EjjfXMgLDUpvGSjFboBJrRwiMUlKMMLdeP.jpg" alt=""> --}}
                            @foreach($proyecto->users as $usuario)
                                <img src="{{asset('storage/'.$usuario->profile_photo)}}" id="imagenesUsuariosProyecto"/>
                            @endforeach
                            
                            {{-- @php
                                foreach ($proyecto->users as $usuario) {
                                    echo "<img src='asset('storage/app/public/$usuario->profile_photo')'/>";
                                }
                            @endphp --}}
                            <button class="add-participant"  style="color:{{$color[7]}}" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                <path d="M12 5v14M5 12h14" />
                            </svg>
                            </button>
                        </div>
                        <div class="days-left" id="days-left"    >
                            @php
                                $fechaActual=date('Y-m-d');
                                $fechaActualSegundos=strtotime($fechaActual);
                                $fechaProyectoSegundos=strtotime($proyecto->due_date);
                                $diasRestantes=($fechaProyectoSegundos-$fechaActualSegundos)/(60*60*24);
                            @endphp

                            @php
                                if($diasRestantes<0) echo "<p>".$diasRestantes." Day Passed"."</p>";
                                else if($diasRestantes==1) echo "<p>".$diasRestantes." Last Day"."</p>";
                                else if($diasRestantes==0) echo "<p>"." Today"."</p>";
                                else echo "<p>".$diasRestantes." Days Left"."</p>";                      
                            @endphp
                        </div>
                        </div>

                    </div>
                @endforeach
            @endif



               </div>
{{--         


        <div class="project-box-wrapper">
        <div class="project-box" style="background-color: #ffd3e2;">
            <div class="project-box-header">
            <span>December 10, 2020</span>
            <div class="more-wrapper">
                <button class="project-btn-more">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
            </div>
            </div>
            <div class="project-box-content-header">
            <p class="box-content-header">UI Development</p>
            <p class="box-content-subheader">Prototyping</p>
            </div>
            <div class="box-progress-wrapper">
            <p class="box-progress-header">Progress</p>
            <div class="box-progress-bar">
                <span class="box-progress" style="width: 20%; background-color: #df3670"></span>
            </div>
            <p class="box-progress-percentage">20%</p>
            <div class="days-left editar" style="color: #4f3ff0;">
                Editar
            </div>
            <div class="days-left ver" style="color: #4f3ff0;">
                Ver
            </div>
            </div>
            <div class="project-box-footer">
            <div class="participants">
                <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
                <img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
                <button class="add-participant" style="color: #df3670;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                </button>
            </div>
            <div class="days-left" style="color: #df3670;">
                2 Days Left
            </div>
            </div>
        </div>
        </div>
        <div class="project-box-wrapper">
        <div class="project-box" style="background-color: #c8f7dc;">
            <div class="project-box-header">
            <span>December 10, 2020</span>
            <div class="more-wrapper">
                <button class="project-btn-more">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
            </div>
            </div>
            <div class="project-box-content-header">
            <p class="box-content-header">Data Analysis</p>
            <p class="box-content-subheader">Prototyping</p>
            </div>
            <div class="box-progress-wrapper">
            <p class="box-progress-header">Progress</p>
            <div class="box-progress-bar">
                <span class="box-progress" style="width: 60%; background-color: #34c471"></span>
            </div>
            <p class="box-progress-percentage">60%</p>
            <div class="days-left editar" style="color: #4f3ff0;">
                Editar
            </div>
            <div class="days-left ver" style="color: #4f3ff0;">
                Ver
            </div>
            </div>
            <div class="project-box-footer">
            <div class="participants">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
                <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
                <button class="add-participant" style="color: #34c471;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                </button>
            </div>
            <div class="days-left" style="color: #34c471;" id="days-left">
                2 Days Left
            </div>
            </div>
        </div>
        </div>
        <div class="project-box-wrapper">
        <div class="project-box" style="background-color: #d5deff;">
            <div class="project-box-header">
            <span>December 10, 2020</span>
            <div class="more-wrapper">
                <button class="project-btn-more">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
            </div>
            </div>
            <div class="project-box-content-header">
            <p class="box-content-header">Web Designing</p>
            <p class="box-content-subheader">Prototyping</p>
            </div>
            <div class="box-progress-wrapper">
            <p class="box-progress-header">Progress</p>
            <div class="box-progress-bar">
                <span class="box-progress" style="width: 40%; background-color: #4067f9"></span>
            </div>
            <p class="box-progress-percentage">40%</p>
            <div class="days-left editar" style="color: #4f3ff0;">
                Editar
            </div>
            <div class="days-left ver" style="color: #4f3ff0;">
                Ver
            </div>
            </div>
            <div class="project-box-footer">
            <div class="participants">
                <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
                <img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="participant">
                <button class="add-participant" style="color: #4067f9;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                </button>
            </div>
            <div class="days-left" style="color: #4067f9;">
                2 Days Left
            </div>
            </div>
        </div>
        </div>
    </div> 
     </div>  --}}
     {{-- <div class="messages-section">
    <button class="messages-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
        <circle cx="12" cy="12" r="10" />
        <line x1="15" y1="9" x2="9" y2="15" />
        <line x1="9" y1="9" x2="15" y2="15" /></svg>
    </button>
    <div class="projects-section-header">
        <p>Client Messages</p>
    </div>
    <div class="messages">
        <div class="message-box">
        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile image">
        <div class="message-content">
            <div class="message-header">
            <div class="name">Stephanie</div>
            <div class="star-checkbox">
                <input type="checkbox" id="star-1">
                <label for="star-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                </label>
            </div>
            </div>
            <p class="message-line">
            I got your first assignment. It was quite good. 🥳 We can continue with the next assignment.
            </p>
            <p class="message-line time">
            Dec, 12
            </p>
        </div>
        </div>
        <div class="message-box">
        <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile image">
        <div class="message-content">
            <div class="message-header">
            <div class="name">Mark</div>
            <div class="star-checkbox">
                <input type="checkbox" id="star-2">
                <label for="star-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                </label>
            </div>
            </div>
            <p class="message-line">
            Hey, can tell me about progress of project? I'm waiting for your response.
            </p>
            <p class="message-line time">
            Dec, 12
            </p>
        </div>
        </div>
        <div class="message-box">
        <img src="https://images.unsplash.com/photo-1543965170-4c01a586684e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDZ8fG1hbnxlbnwwfDB8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile image">
        <div class="message-content">
            <div class="message-header">
            <div class="name">David</div>
            <div class="star-checkbox">
                <input type="checkbox" id="star-3">
                <label for="star-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                </label>
            </div>
            </div>
            <p class="message-line">
            Awesome! 🤩 I like it. We can schedule a meeting for the next one.
            </p>
            <p class="message-line time">
            Dec, 12
            </p>
        </div>
        </div>
        <div class="message-box">
        <img src="https://images.unsplash.com/photo-1533993192821-2cce3a8267d1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTl8fHdvbWFuJTIwbW9kZXJufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile image">
        <div class="message-content">
            <div class="message-header">
            <div class="name">Jessica</div>
            <div class="star-checkbox">
                <input type="checkbox" id="star-4">
                <label for="star-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                </label>
            </div>
            </div>
            <p class="message-line">
            I am really impressed! Can't wait to see the final result.
            </p>
            <p class="message-line time">
            Dec, 11
            </p>
        </div>
        </div>
    </div>
    </div>  --}}
    </div>
    </div>
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" style="position: absolute;margin-left:80px;">
            @include('modals.form_project')
        </div> 
       <div class="modal Clonado" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" style="position: absolute;margin-left:80px;">
            @include('modals.form_project')
        </div> 
        {{-- <div class="modal" id="exampleModal Clone" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" style="position: absolute;margin-left:80px;display:none;">
            @include('modals.form_project')
        </div> 
  --}}
<div id="pageOverlay" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background: rgba(0,0,0,0.6); z-index: 1;"></div>

<form id="form_eliminar_proyecto" method="POST" action="{{ route('project.delete') }}" style="display:none;position: absolute;">
    @csrf
    <input type="hidden" name="id" id="proyecto-id" value="">
</form>

</body>
</html>

<style>
div.modal-project-options {
  z-index: 1;
  position: absolute;
  width: 140px;
  height: 90px;
  margin-left: -56px;
  margin-top: -150px;
  border-radius: 20px;
}


div.modal-project-options p:first-of-type {
  background-color: #f3f6fd;
  margin-top: 7px;
  outline: 2px solid none;
  width: 140px;
  text-align: center;
  height: 40px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  padding: 8px;
}

.project-box .project-box-header .more-wrapper .modal-project-options p:hover .project-box{
    scale: (1.00);
}



div.modal-project-options hr {
  width: 140px;
  margin-top: -17px;
}

div.modal-project-options p:last-of-type {
  background-color: #f3f6fd;
  margin-top: -8px;
  outline: 2px solid none;
  width: 140px;
  text-align: center;
  height: 40px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  padding: 8px;
}

 



         .app-sidebar-link.active {
    background-color: #1f1c2e;
    color: #fff;
}

.app-sidebar-link {
    color: #1f1c2e;
    color: #1f1c2e;
    margin: 16px 0;
    transition: 0.2s;
    border-radius: 50%;
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    display: flex
;
    justify-content: center;
    align-items: center;
    margin-left: 595px;
    outline: 2px solid grey;
    
}

#edit-task-btn {
    border-radius: 50%;
    object-fit: cover;
    width: 40px;
    height: 40px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    outline: 2px solid none;
    align-items: center;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
[type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
    cursor: pointer;
}
.btn {
    display: inline-block;
    padding: .43em 1em;
    line-height: 1.5;
    background: rgba(18, 119, 189, 1);
    color: rgba(255, 255, 255, 1);
    font-weight: 400;
    border-radius: 0;
    margin: .2em;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
    letter-spacing: .05em;
    transition: .5s ease all;
    max-width: 100%;
    border-radius: .25em;
}
.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
.btn {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}

</style>

<script>
    function displayInputValue(input) {
            const $input = $(input);
            const modal = $('[id="exampleModal"]'); 

            if ($input.attr('id') == "inputTitulo") {
                modal.find(".box-content-header").html($input.val());
            }

            if ($input.attr('id') == "inputDescripcion") {
                modal.find(".box-content-subheader").html($input.val());
            }
        }

    displayDate();
    displayColor();
    uploadImage();
    function uploadImage(){
        const modal=$('[id="exampleModal"]');
        modal.find('#seleccionar-archivo').on('click', function() {
            modal.find('#inputImagen').click();
        });
        modal.find('#inputImagen').on('change',function(){
            let archivos=this.files;
            if(archivos){
                modal.find('#imagenSeleccionada').attr('src',URL.createObjectURL(archivos[0]));
                console.log($('#imagenSeleccionada').attr('src'));
                modal.find('#archivo_seleccionado').html(`${archivos[0].name}`);
            }
        });
    }
    function displayDate(){
        const inputFechaFinalizacion=$('[id="inputFechaFinalizacion"]');
        inputFechaFinalizacion.on('change',function(){
            const fechaElegida=new Date($(this).val());
            const fechaActual=new Date();
            
            const fechasResta=fechaElegida.getTime()-fechaActual.getTime();
            const diasRestantes=Math.round(fechasResta/ (1000*60*60*24));

            let frase="";
            if(diasRestantes<0) frase="Dia expirado";
            if(diasRestantes==0) frase="Hoy";
            if(diasRestantes==1) frase=`Queda 1 día`;
            if(diasRestantes>1) frase=`Quedan ${diasRestantes} días`;

            const modal = $('[id="exampleModal"]'); 
            modal.find("#days-left").html(frase);

            const diaElegido=fechaElegida.getDate();
            const meses=[
                "Enero","Febrero","Marzo","Abril","Mayo","Junio",
                "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
            ];
            const mesElegido=meses[fechaElegida.getMonth()];
            const anoElegido=fechaElegida.getFullYear();
            const fechaElegidaFormateada=`${mesElegido} ${diaElegido},${anoElegido}`;
            console.log(fechaElegidaFormateada);
            modal.find('.project-box-header').children().first().html(fechaElegidaFormateada);

        });

    }
    function displayColor(){
        const modal=$('[id="exampleModal"]');
        const inputColor=$('[id="inputColor"]');
        const inputColorFuente=$('[id="inputColorFuente"]');
        inputColor.on('input',function(){
            const colorElegido=$(this).val();
            const projectBox=modal.find('.project-box');
            const inputColorProyectoFondo=modal.find('#projectBackgroundColor');
            projectBox.css('background-color',colorElegido);
            inputColorProyectoFondo.val(colorElegido);

        });
        inputColorFuente.on('input',function(){
            const colorFuenteElegido=$(this).val();
            const colorLabelFuente=modal.find('.color-label-fuente');
            colorLabelFuente.css('background-color',colorFuenteElegido);
            $(body).css('cursor','crosshair');
            const btnAddParticipant=modal.find('.add-participant');
            const projectBox=modal.find('.project-box');
            btnAddParticipant.on('mouseenter', function() {
                $(this).css('cursor', 'crosshair');
            });
            btnAddParticipant.on('mouseleave', function() {
                $(this).css('cursor', '');
            });
            projectBox.on('mouseenter', function() {
                $(this).css('cursor', 'crosshair');
            });
            projectBox.on('mouseleave', function() {
                $(this).css('cursor', '');
            });
            const colorElegido=modal.find('#colorElegido');
            colorElegido.val(colorFuenteElegido);
        });
    }

    function changeColorFont(element){
        const modal=$('[id="exampleModal"]');
        const colorElegido=modal.find('#colorElegido').val();
        const etiqueta=$(element);
        if(etiqueta.attr('class')=="box-progress-bar"){
            const progressBarBackground=modal.find('#progressBarBackground');
            progressBarBackground.val(colorElegido);
            etiqueta.children().first().css('background-color',colorElegido);
        }else{
            etiqueta.css('color',colorElegido);
            saveColorFont();
        }
    }
    saveColorFont();

    function saveColorFont(){
        const modal=$('[id="exampleModal"]');
        let colores=[];
        const palabras= modal.find('[id="font"]');
        palabras.each(function() {
            let palabra=$(this);
            let colorRGB=palabra.css('color');
            let colorHEX;
            if(colorRGB===null || colorRGB==null || colorRGB=='' ||colorRGB==' ') colorHEX="#000000";
            else colorHEX=rgbStringToHex(colorRGB);
            colores.push(colorHEX);
        });
        modal.find('#colorFonts').val(colores);
    }
    function mostrarDropdownContent(){
        const modal=$('[id="exampleModal"]');
        const btnDropdown=modal.find('.dropdown-button');
        btnDropdown.on('click',function(){
            const dropdownContent=modal.find('.dropdown-content');
            dropdownContent.toggle();
        });
    }
    mostrarDropdownContent();

    function seleccionarUsuariosDisponibles(element){
        const modal=$('[id="exampleModal"]');
        const usuarioSeleccionado= $(element);
        usuarioSeleccionado.removeAttr('onclick');
        usuarioSeleccionado.append(`
            <i class="fas fa-times" style="outline:2px solid none; margin-left:4px;" onclick="eliminarUsuariosElegidos(this)"></i>
        `);
        const valorUsuario = usuarioSeleccionado.data('value');
        usuarioSeleccionado.append(`
            <input type="hidden" name="usuario[]" value="${valorUsuario}">
        `);
        modal.find('#usuarios-elegidos').append(usuarioSeleccionado);
        const imagenUsuario = usuarioSeleccionado.children().first().clone(false);
        modal.find('.participants').append(imagenUsuario);
    }

    function eliminarUsuariosElegidos(element) {
        const modal = $('[id="exampleModal"]');
        const usuarioSeleccionado=$(element).parent();
        const icono=usuarioSeleccionado.children().last();
        icono.remove();
        const valorUsuario=usuarioSeleccionado.attr('data-value');
        let usuario=`
            <div class="dropdown-option" data-value="${valorUsuario}" style="outline:2px solid none;" onclick="seleccionarUsuariosDisponibles(this)">
                 ${usuarioSeleccionado.html()}
           </div>            
        `;        
        usuarioSeleccionado.remove();
        modal.find('#usuarios-disponibles').append(usuario);
    }

    function rgbToHex(r, g, b) {
        return "#" +
            r.toString(16).padStart(2, '0') +
            g.toString(16).padStart(2, '0') +
            b.toString(16).padStart(2, '0');
    }

    function rgbStringToHex(rgbString) {
        let matches = rgbString.match(/rgb\s*\(\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*\)/);
        if (matches) {
            let r = parseInt(matches[1]);
            let g = parseInt(matches[2]);
            let b = parseInt(matches[3]);
            return rgbToHex(r, g, b);
        }
        return null;  
    }




    const modal=$('[id="exampleModal"]');
    const input=modal.find('#inputColor');
    const label=modal.find('.color-label');

    input.on('input',function(){
        label.css('background-color',$(this).val());
    });


    //Para al editar
    //modal[1].find('#inputColor').css('margin-left','100px');
    

    
        
    // $('#exampleModal').each(function (e) {
    //     console.log("Modal:"+e);

    //     // displayInputValue($('#inputTitulo'));
    //     // displayInputValue($('#inputDescripcion'));
    // });


    document.querySelectorAll('.project-box').forEach(box => {
    box.addEventListener('mouseenter', () => {
        box.style.cursor = 'pointer';

        box.style.transform = 'scale(1.01)';
        box.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
    });

    box.addEventListener('mouseleave', () => {
        box.style.cursor = '';
        box.style.transform = '';
        box.style.boxShadow = '';
    });
    });



    document.querySelectorAll('.modal-project-options p').forEach(p => {
        p.addEventListener('mouseenter', () => {
            p.style.background='#dfdfdf';
            document.querySelectorAll('.project-box').forEach(box => {
                box.style.transform = 'scale(1.00)';
                box.style.boxShadow='0px 0px 0px 0px';
            });
            
        });

        p.addEventListener('mouseleave', () => {
            p.style.background='';
        });
    });
     $('.project-btn-more').on('click', function(e) {
            const projectBox = $(this).closest('.project-box');
            const modal = projectBox.find('.modal-project-options');
            modal.fadeToggle(200);
     });
    $(document).on("click", function(event){
        if(event.target.className!='[object SVGAnimatedString]')$('.modal-project-options').fadeOut(200);
        
    })
        
            
       
        function moverProyecto(){
            const projectBox=$('#project-box');
            projectBox.on('click', function() {
                let posicionProjectBox = $(this).offset(); 
                console.log('Posición X:', posicionProjectBox.left);
                console.log('Posición Y:', posicionProjectBox.top);
            });
            projectBox.on('dragover', function() {
                let posicionProjectBox = $(this).offset();
                let posicionRaton={
                    x:event.originalEvenet.pageX,
                    y:event.originalEvenet.pageY
                }; 
                const diferenciaX = posicionRaton.x - posicionProjectBox.left;
                const diferenciaY = posicionRaton.y - posicionProjectBox.top;
            });


        }

    moverProyecto();

    // function displayDate(){
    //     document.getElementById('inputFechaFinalizacion').addEventListener('change', function() {
    //             var input_date_time=new Date(this.value).getTime();
    //             var actual_date_time=new Date().getTime();
    //             var diff_dias=Math.abs((actual_date_time-input_date_time)/(1000*60*60*24));
    //             document.getElementById('days-left').innerHTML=`${Math.trunc(diff_dias)} Days Left`;
    //         });
    //     }

        

        


    $(document).ready(function () {
        const formularioEditar=$('.modal.Clonado');
        const formularioCrear=$('#exampleModal');

        formularioEditar.fadeOut();
        formularioCrear.fadeOut();
        $('#pageOverlay').fadeOut();
        
       
        //$('#exampleModal#Clonado').fadeOut();
    //    $('#exampleModal').fadeOut();
    //    $('#exampleModalEdit').fadeOut();
    //    $('#pageOverlay').fadeOut();
        $('.app-sidebar-link.active').click(function (e) {
            e.preventDefault();
            formularioCrear.fadeIn();
            $('#pageOverlay').fadeIn();
            formularioCrear.css('z-index',9998);
            formularioCrear.find('#projectId').val();
            formularioCrear.find('#rutaImagen').val();
            //  $('#exampleModal#Clonado').fadeIn();
            //  $('#exampleModal#Clonado').css('z-index',9998);  
            // $('#exampleModal').fadeIn();
            // $('#exampleModal').css('z-index',9998);
            // $('#pageOverlay').fadeIn();
            // $('#exampleModal #projectId').val();
            // $('#exampleModal #rutaImagen').val();
            // $('#exampleModal Clonado').fadeIn();
            // $('#exampleModal Clonado').css('z-index',9998);            
      });
    //   $('.btn.secondary').click(function (e){
    //         $('#exampleModal').fadeOut();
    //         $('#pageOverlay').fadeOut();
    //     });
    const botonFormularioCrear=formularioCrear.find('.btn.secondary');
    botonFormularioCrear.click(function(e){
        formularioCrear.fadeOut();
        $('#pageOverlay').fadeOut();
    });

        // $('#exampleModal .btn.secondary').click(function(e){
        //     $('#exampleModal').fadeOut();
        //     $('#pageOverlay').fadeOut();
        // });

      
    });
   
   

function confirmarEliminado(projectId){
    console.log(projectId);
        Swal.fire({
            title: "¿Seguro que deseas eliminar?",
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: "Si",
            denyButtonText: `No`
                }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('proyecto-id').value=projectId;
                document.getElementById('form_eliminar_proyecto').submit();
                Swal.fire("Eliminado", "", "success");
            } else if (result.isDenied) {
                Swal.fire("No se eliminó ", "", "info");
            }
    });
}


   
</script>
<script>
    const formularioEditar=$('.modal.Clonado');
    const formularioCrear=$('#exampleModal');

    formularioEditar.fadeIn();
    formularioEditar.css('z-index',9998);
    function editarProyecto(proyecto,usuarios) {
            formularioEditar.fadeIn();
            formularioEditar.css('z-index',9998);
            $('#pageOverlay').fadeIn();

            //El proyecto en sí
            fillContentProjectBox(proyecto,usuarios);
            fillContentFormProjectBox(proyecto,usuarios);

            const botonFormularioEditar=formularioEditar.find('.btn.secondary');
            botonFormularioEditar.click(function(e){
                formularioEditar.fadeOut();
                $('#pageOverlay').fadeOut();
            });


          }

          function fillContentProjectBox(proyecto,usuarios){
            const colorProyecto=proyecto.color_project;
            $('.modal.Clonado .project-box').css('background',colorProyecto);
            const fechaElegida=new Date(proyecto.due_date);
            
            const meses=[
                    "Enero","Febrero","Marzo","Abril","Mayo","Junio",
                    "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"
                ];
            const diaElegido=fechaElegida.getDate();
            const mesElegido=meses[fechaElegida.getMonth()];
            const anoElegido=fechaElegida.getFullYear();
            const fechaElegidaFormateada=`${mesElegido} ${diaElegido},${anoElegido}`;
            $('.modal.Clonado .project-box-header').children().first().html(`${fechaElegidaFormateada}`);
            $('.modal.Clonado .project-box-content-header').children().first().html(`${proyecto.name}`);
            $('.modal.Clonado .project-box-content-header').children().last().html(`${proyecto.description}`);
            $('.modal.Clonado .box-progress').css('background',proyecto.color_progress_bar);

            const fechaActual=new Date();
            const fechasResta=fechaElegida.getTime()-fechaActual.getTime();
            const diasRestantes=Math.round(fechasResta/ (1000*60*60*24));
            let frase="";
            if(diasRestantes<0) frase="Dia expirado";
            if(diasRestantes==0) frase="Hoy";
            if(diasRestantes==1) frase=`Queda 1 día`;
            if(diasRestantes>1) frase=`Quedan ${diasRestantes} días`;
            $('.modal.Clonado #days-left').html(`${frase}`); 

            $('.modal.Clonado .participants').html('');
            $('.modal.Clonado .participants').prepend(
                `<button class="add-participant" onclick="changeColorFont(this)" id="font">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                 </button>`);

            for (let usuario of usuarios) {
                $('.modal.Clonado .participants').append(`<img src="{{asset('storage/${usuario.profile_photo}')}}"/>`);   
            }

            const coloresFont=proyecto.color_font.split(',');
            $('.modal.Clonado #font').each(function(x, font) {
                $(this).css('color',coloresFont[x]);
                console.log(coloresFont[x]);
            });
          }


          function fillContentFormProjectBox(proyecto,usuarios) { 
                $('.modal.Clonado #inputTitulo').val(proyecto.name);
                $('.modal.Clonado #inputDescripcion').val(proyecto.description);
                $('.modal.Clonado #inputColor').val(proyecto.color_project);
                $('.modal.Clonado .color-label').css('background',proyecto.color_project);
                $('.modal.Clonado #usuarios-elegidos').html('');

                for(let usuario of usuarios){
                    let usuarioEtiqueta=`
                    <div class="dropdown-option" data-value="${usuario.id}" style="outline:2px solid none;">
                        <img src="http://tasklink.test/storage/${usuario.profile_photo}">
                        ${usuario.name}
                        <i class="fas fa-times" style="outline:2px solid none;margin-left:4px;" onclick="eliminarUsuariosElegidos(this)"></i><input type="hidden" name="usuario[]" value="4">
                    </div>
                    `;
                    $('.modal.Clonado #usuarios-elegidos').append(`${usuarioEtiqueta}`);
                    
                    $('.modal.Clonado .dropdown-content').children().each(function(i) {
                        if($(this).attr('data-value')==usuario.id) $(this).remove();
                    });



                    $('.modal.Clonado #inputFechaFinalizacion').val(proyecto.due_date.split('T')[0]);
                    

                




                    
                    console.log(proyecto.image.length);

                    const archivoRuta=proyecto.image;
                    console.log(archivoRuta)
                    const nombreArchivo=archivoRuta.replace("C:\\laragon\\www\\tasklink\\storage\\app/public/profiles\\","");
                    console.log(nombreArchivo);
                    $('.modal.Clonado #archivo_seleccionado').html(nombreArchivo);
                    $('.modal.Clonado #projectId').val(proyecto.id);
                    const rutaImagen="http://tasklink.test/storage/profiles/"+nombreArchivo;
                    $('.modal.Clonado #imagenSeleccionada').attr('src',rutaImagen);
                    $('.modal.Clonado #rutaImagen').attr('src',"profiles/"+nombreArchivo);
                    // $('#imagenSeleccionado').attr('src',archivoRuta);
                    // @foreach($usuariosDisponibles as $usuario)
                    //         <div class="dropdown-option" data-value="{{$usuario->id}}" style="outline:2px solid none;" onclick="seleccionarUsuariosDisponibles(this)">
                    //             <img src="{{asset('storage/'.$usuario->profile_photo)}}"/>
                    //             {{$usuario->name}}
                    //         </div>
                    //     @endforeach
                    
                }

           }

           //Funcionalidades de los formularios

            // const projectBoxModal=document.querySelectorAll('#exampleModal');

            // for(let i=0;projectBoxModal.length;i++){
            //     console.log("A ver cuantos hay");
            // }

            //  function displayInputValue(input){
            //     //if(input.id=="inputTitulo") document.querySelector("#exampleModal .box-content-header").innerHTML=input.value;
            //     if(input.id=="inputDescripcion") document.querySelector("#exampleModal .box-content-subheader").innerHTML=input.value;
            //     if(input.id=="inputColor") document.querySelector("#exampleModal titulo").innerHTML=input.value;
            //     if(input.id=="inputUsuarios") document.getElementById("#exampleModal usuarios").innerHTML=input.value;
            //     // if(input.id=="inputFechaFinalizacion") {
            //     //     const fechaActual=new Date();
            //     //     const ano=fechaActual.getFullYear();
            //     //     const mes=fechaActual.getMonth();
            //     //     const dia=fechaActual.getDay();
            //     //     const fechaFormateadaActual=ano+"-"+mes+"-"+dia;
                    
            //     //     const fechaElegida=input.value;
            //     //     const diasRestantes=(fechaFormateadaActual-fechaElegida)/(60*60*24);
            //     //     let frase="";
            //     //     if(diasRestantes<0) frase="Dia expirado";
            //     //     if(diasRestantes==0) frase="Hoy";
            //     //     if(diasRestantes==1) frase=`Queda 1 día`;
            //     //     if(diasRestantes>1) frase=`Quedan ${diasRestantes} días`;
            //     //     document.getElementById('#exampleModal #days-left').innerHTML=`${frase}`;    
            //     // }
                
            //  }


</script>