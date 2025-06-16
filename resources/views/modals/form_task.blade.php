<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.full.min.js"></script>
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
 

     @vite(['resources/css/modal_form_task.css'])
    
</head>
        <div class="contenido">
            <form action="{{route('tarea.create')}}"  method="POST" enctype='multipart/form-data'>
            {{-- <form action="{{route('tarea',['funcion'=>'create'])}}"  method="POST" enctype='multipart/form-data'> --}}
                @csrf
                @method('POST')
                <label for="tarea">Nombre Tarea</label>
                <input type="text" id="inputTitulo" onkeyup="displayInputValue(this)" name="titulo">

                <label for="descripcion">Descripcion</label>
                <input type="text" id="inputDescripcion" onkeyup="displayInputValue(this)" name="descripcion" >

                <label for="">Color</label>
                <label for="inputColor" class="color-label" id="color-label"></label>
                <input type="color" id="inputColor" name="colorTarea" class="color-hidden" onclick="displayInputValue(this)">

                <label for="">Color del cabezado</label>
                <label for="inputColorCabezado" class="color-label" id="color-label-cabezado"></label>
                <input type="color" id="inputColorCabezado" name="colorCabezado" class="color-hidden" onclick="displayInputValue(this)">

                <label for="inputUsuarios">Usuarios</label>
                <div style="outline:1px solid rgba(128, 128, 128, 0.562);min-height:33px;border-radius:3px;display:flex;flex-wrap:wrap;" id="usuarios-elegidos">
                    
                </div>
                
                <div class="custom-dropdown">
                    <button class="dropdown-button" type="button">Selecciona un Usuario</button>
                    <div class="dropdown-content" style="display:none;" id="usuarios-disponibles">
                           
                        @foreach($usuariosDisponibles as $usuario)
                            <div class="dropdown-option" data-value="{{$usuario->id}}" style="outline:2px solid none;" onclick="seleccionarUsuariosDisponibles(this)">
                                <img src="{{asset('storage/'.$usuario->profile_photo)}}"/>
                                {{$usuario->name}}
                            </div>
                        @endforeach

                        {{-- <div class="dropdown-option" data-value="usuario1" style="outline:2px solid none;" onclick="seleccionarUsuariosDisponibles(this)">
                            <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="Usuario 1"/>
                            Usuario1
                        </div>
                        <div class="dropdown-option" data-value="usuario2"  onclick="seleccionarUsuariosDisponibles(this)">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Usuario 2"/>
                            Usuario2
                        </div>
                        <div class="dropdown-option" data-value="usuario3"  onclick="seleccionarUsuariosDisponibles(this)">
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Usuario 3"/>
                            Usuario3
                        </div>
                        <div class="dropdown-option" data-value="usuario4" onclick="seleccionarUsuariosDisponibles(this)">
                            <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Usuario 4"/>
                            Usuario4
                        </div> --}}
                    </div>
                </div>


                <label for="inputDepartamentos">Nivel de prioridad</label>
                <select id="inputPrioridad" onchange="displayInputValue(this)" name="prioridad">
                    <option value="ALTA">Alta</option>
                    <option value="BAJA">Baja</option>
                    <option value="MEDIA">Media</option>
                    <option value="IMPRESCINDIBLE">Imprescindible</option>
                </select>
                
                <label for="fecha">Fecha de finalizacion</label>
                <input type="date" id="inputFechaFinalizacion" onchange="displayInputValue(this)" name="fechaFinalizacion" >

                <label for="imagen" style="position:absolute;">Imagen</label>
                <input type="file" id="imagen" name="imagen" style="position:absolute;opacity:0;margin-left:1000px;">
                <button type="button" class="btn" style="margin-left: 0px;margin-top:35px;outline:2px solid none;" id="boton-seleccionar-archivo" onclick="seleccionarArchivo()">Seleccionar Archivo</button>
                <p id="archivo_seleccionado">Ningún archivo seleccionado</p>


                <div class="button-group">
                    <button type="submit" class="btn">CREAR</button>
                    <a class="btn secondary" data-dismiss="modal">CERRAR</a>
                </div>
            </form>
        </div>


        <div class="box box-1" style="margin-left:660px;margin-top:300px;">
                <h2 style="color: #1f1c2e">Tareas</h2>
                <div class="table-container">
                <table class="table-cryptic">
                    <thead>
                    <tr id="cabezado">
                        <th>Tarea</th>
                        <th>Fecha de Finalización</th>
                        <th>Progreso</th>
                        <th>Usuarios asignados</th>
                        <th>Prioridad</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="toggle-expandable-modal" data-target="#row-1">
                        <td id="titulo-tarea">Diseñar Base de Datos</td>
                        <td id="fecha-tarea">2025/04/10</td>
                        <td>
                            <p>0%</p>
                            <div class="box-progress-bar" style="width:280px;margin-left:1px;height:8px;">
                                <span class="box-progress" style="width: 0%; background-color: #ff942e;margin-left:-11px;height:8px;"></span>
                            </div>
                        </td>
                        <td style="outline:2px solid none;" id="usuarios-asignados">
                            
                        </td>
                        <td id="prioridad-tarea">ALTA</td>
                        <td id="prioridad-imagen" >
                          

                        </td>
                        
                        <td style="outline:2px solid none;display:flex;" id="botones-td">
                            <button class="btn btn-primary" style="outline:2px solid none;border-radius: 50%;margin-top:10px;" id="edit-task-btn">
                                <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i> 
                            </button>
                            <button class="btn btn-primary" style="outline:2px solid none;border-radius: 50%;margin-top:10px;" id="edit-task-btn">
                                <i class="fa fa-trash" title="Editar" onclick="alert('Editar esta tarea')"></i> 
                            </button>
                            <span class="row-toggle" style="z-index: 1;margin-left:55px;margin-top:-3px;">
                                <span class="vertical" style="width:20px;"></span>
                                <span class="horizontal" style="width:20px;"></span>
                            </span>
                        </td>
                        
                    </tr>
                 
                    <tr id="row-1" class="expandable-modal" style="display: none;">
                        <td colspan="8">
                                
                            
                            <div style="background-color: #fee4cb;margin-top:10px;" class="div-expandable">
                                <div class="row">
                                    <div class="d-flex flex-wrap" style="margin-top:-14px;font-size:13px;outline:2px solid none;font-weight: bold;width:20px;align-content:flex-start;align-items:flex-start;margin-left:16px;height:0px;">
                                        <p>Descripcion: </p>
                                    </div>
                            </div>
                            </div>

                                <p style="width:800px;outline:2px solid none;margin-top:9px;" id="descripcion-tarea">djklfjakldjsklajkl</p>
                         
                        </td>
                        
                    </tr>
                   
                
                    </tbody>
                    
                </table>
           
                 </div>
                </div>

        <script>




            function displayInputValue(input) {

                if(input.id=="inputTitulo") document.getElementById("titulo-tarea").innerText = input.value;
                if(input.id=="inputDescripcion") {
                    $('.expandable-modal').show();
                    document.getElementById("descripcion-tarea").innerText = input.value;
                }
                if(input.id=="inputFechaFinalizacion") {
                    const fecha=new Date(input.value);
                    const formateada=new Intl.DateTimeFormat('es-Es').format(fecha);
                    document.getElementById("fecha-tarea").innerText = formateada;
                }
                if(input.id=="inputPrioridad") document.getElementById('prioridad-tarea').innerText=input.value;
                if(input.id=="inputColor") {
                    input.addEventListener("input", function () {
                        $(".toggle-expandable-modal").css("background-color",input.value);
                        $(".toggle-expandable-modal").css("outline","2px solid "+input.value);
                        $("#color-label").css("background-color",input.value);
                        $(".expandable-modal").css("background-color",input.value);
                        $(".expandable-modal").css("outline","2px solid "+ input.value);
                    });
                }
                if(input.id=="inputColorCabezado"){
                    input.addEventListener("input", function () {
                        let children=$('#cabezado').children();
                        for(let child of children){
                            child.style.background=input.value;
                        }
                       $("#color-label-cabezado").css("background-color",input.value);
                        
                    });
                }
            }
          
            function mostrarDropdownContent(){
                    $('.dropdown-button').on('click',function(){
                        $('.dropdown-content').toggle();
                    });
            }

            
                mostrarDropdownContent();

                function seleccionarUsuariosDisponibles(element){
                    const usuarioSeleccionado=element;
                    const imagen=usuarioSeleccionado.firstElementChild.cloneNode(false);
                    document.getElementById('usuarios-asignados').appendChild(imagen);
                    element.removeAttribute("onclick");
                    usuarioSeleccionado.innerHTML+=` <i class="fas fa-times" style="outline:2px solid none;margin-left:4px;" onclick="eliminarUsuariosElegidos(this)">`;
                    const valorUsuario=usuarioSeleccionado.getAttribute('data-value');
                    usuarioSeleccionado.innerHTML+=`<input type="hidden" name="usuario[]" value="${valorUsuario}">`;
                    document.getElementById('usuarios-elegidos').appendChild(usuarioSeleccionado);  
                }

                function eliminarUsuariosElegidos(element){
                    let usuarioSeleccionado=element.parentNode;
                    let icono=usuarioSeleccionado.lastChild;
                    icono.remove();
                    let valorUsuario=usuarioSeleccionado.getAttribute('data-value');
                    const imagenesAsignados=document.getElementById('usuarios-asignados').children;
                    const srcUsuarioEliminado=usuarioSeleccionado.firstElementChild.getAttribute('src');
                    console.log(usuarioSeleccionado);
                    for(let imagen of imagenesAsignados){

                        if(imagen.getAttribute('src')==srcUsuarioEliminado)imagen.remove();
                    }

                    let usuario=`
                        <div class="dropdown-option" data-value="${valorUsuario}" style="outline:2px solid none;" onclick="seleccionarUsuariosDisponibles(this)">
                            ${usuarioSeleccionado.innerHTML}
                        </div>`;
                    usuarioSeleccionado.remove();
                    document.getElementById('usuarios-disponibles').innerHTML+=usuario;  
                }

              



          
          

            $(function () {
                    
                    
                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                        theme: 'bootstrap4'
                    });

                    $('#inputPrioridad').select2({
                        theme: 'bootstrap4'
                    });
                     $('#inputUsuarios').select2({
                        theme: 'bootstrap4'
                    });

                    $('.toggle-expandable-modal').on('click', function() {
                        $('.expandable-modal').toggle();
                    });


                //const input = document.getElementById("inputColor");
                const label = document.querySelector(".color-label");
                const tituloTarea=document.getElementById("titulo-tarea");
                const fechaTarea=document.getElementById("fecha-tarea");
                const descripcionTarea=document.getElementById("descripcion-tarea");

                // input.addEventListener("input", function () {
                //     label.style.backgroundColor = this.value;
                //     $(".table-container.modal-table tbody tr").css("background-color",this.value);
                //     $(".table-container.modal-table tbody tr").css("outline","2px solid "+this.value);
                //     $(".expandable-modal").css("outline","2px solid "+this.value);
                //     $("tbody").css("background-color",this.value);
                // });

                });



                    $( "#imagen" ).on('change',function(){
                        let archivo=this.files[0];
                        let src = URL.createObjectURL(archivo);
                        $('#archivo_seleccionado').html(`${archivo.name}`);
                        $('#prioridad-imagen').append(`<img src="${src}" style="width:60px;height:50px;border-radius:0%;">`); 
                    });
             
                      function seleccionarArchivo(){
                    
                        $('#imagen').trigger('click');
                      }



        </script>
        <style>
            .tarea{
                font-weight: normal;
            }
        
            tr:hover{
                background-color:#fee4cb;
            }
            #form_subtask{
                margin-top: 290px;
                margin-left: 1400px;
                width: 350px;
                overflow-y: hidden;
                overflow-x: hidden;
            
            }
            #form_subtask .row{
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                outline: 2px solid none;
                margin-left: -20px;
            
            }
            .contenido{
                margin-left: 400px;
                height: 340px;
                margin-top: 180px;
            }
            #form_subtask .icons>i:first-child{
                color:grey;
            }
            #form_subtask .icons>i:first-child:hover{
                color: #007bff;
            }

            #input-subtarea{
                background-color:transparent;
                border:none;
                outline:none;
                color:grey;
            
            }

            #plus:hover{
                background-color:rgba(0, 0, 0, 0.233);
                border-radius:20px;    
            }

            #cabezado:hover{
                background-color: #ff942e;
            }
            #exampleModal_task .contenido {
                height: 900px;
                margin-left: 190px;
                margin-top: -10px;
            }

            .toggle-expandable:hover{
                background-color:#fee4cb9f; 
            }

.custom-dropdown {
    position: relative;
    width: 300px;
    margin-top: 20px;
    font-family: Arial, sans-serif;
}

/* Botón del dropdown */
.dropdown-button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    width: 124%;
    text-align: left;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 5px;
}

/* Contenedor de las opciones */
.dropdown-content {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background-color: #fff;
    box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    z-index: 1;
}

/* Estilo para cada opción del dropdown */
.dropdown-option {
    padding: 10px;
    cursor: pointer;
    display: flex;
    align-items: center;
    border-bottom: 1px solid #ddd;
}

/* Estilo para la imagen */
.dropdown-option img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    margin-right: 10px;
}

/* Efecto hover para las opciones */
.dropdown-option:hover {
    background-color: #f1f1f1;
}

/* Mostrar las opciones cuando el dropdown está activo */
.custom-dropdown.open .dropdown-content {
    display: block;
}
.dropdown-option{
    margin:2px;
}
#usuarios-elegidos{
    outline:1px solid rgba(128, 128, 128, 0.562);
    min-height:33px;
    border-radius:3px;
    display:flex;
    flex-wrap:wrap;
}
#usuarios-elegidos .dropdown-option{
    height:33px;
    border:none;
    outline:2px solid none;
    width:140px;
}
#usuarios-elegidos .dropdown-option img{
    height:33px;
    width:45px;
}
#usuarios-elegidos .dropdown-option p{
    width:80px;
    outline:2px solid none;
}
#usuarios-elegidos .dropdown-option i{
    margin-left:8px;
    outline:2px solid none;
}

            
        </style>