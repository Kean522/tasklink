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
            <form method="POST" action="#" >
                @csrf
                <label for="tarea">Nombre Tarea</label>
                <input type="text" id="inputTitulo" onkeyup="displayInputValue(this)" name="inputTitulo">

                <label for="descripcion">Descripcion</label>
                <input type="text" id="inputDescripcion" onkeyup="displayInputValue(this)" name="inputDescripcion" >

                <label for="">Color</label>
                <label for="inputColor" class="color-label"></label>
                <input type="color" id="inputColor" name="inputColor" class="color-hidden">

                <label for="inputUsuarios">Usuarios</label>
                <select id="inputUsuarios" name="inputUsuarios[]" class="form-control select2bs4" multiple="multiple" data-placeholder="Selecciona usuarios" >
                    <option value="usuario1">Usuario 1</option>
                    
                    <option value="usuario2">Usuario 2</option>
                    <option value="usuario3">Usuario 3</option>
                    <option value="usuario4">Usuario 4</option>
                </select>


                <label for="inputDepartamentos">Nivel de prioridad</label>
                <select id="inputPrioridad" >
                    <option value="departamento1">Departamento 1</option>
                    <option value="usuario2">Departamento 2</option>
                    <option value="usuario3">Departamento 3</option>
                    <option value="usuario4">Departamento 4</option>
                </select>
                
                <label for="fecha">Fecha de finalizacion</label>
                <input type="date" id="inputFechaFinalizacion" onchange="displayInputValue(this)" name="inputFechaFinalizacion" >

                <label for="imagen" style="position:absolute;">Imagen</label>
                <input type="file" id="imagen" name="imagen" style="position: absolute;opacity:0;">
                <button type="button" class="btn" style="margin-left: 0px;margin-top:35px;outline:2px solid none;">Seleccionar Archivo</button>
                <p id="archivo_seleccionado">Ningún archivo seleccionado</p>


                <div class="button-group">
                    <button type="submit" class="btn">CREAR</button>
                    <a class="btn secondary" data-dismiss="modal">CERRAR</a>
                </div>
            </form>
        </div>


        <div class="box box-1" style="margin-left:500px;margin-top:200px;">
                <h2 style="color: #1f1c2e">Tareas</h2>
                <div class="table-container">
                <table class="table-cryptic">
                    <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Fecha de Finalización</th>
                        <th>Progreso</th>
                        <th>Usuarios asignados</th>
                        <th>Prioridad</th>
                        <th>Acciones</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="toggle-expandable" data-target="#row-1">
                        <td>Diseñar Base de Datos</td>
                        <td>2025/04/10</td>
                        <td>
                            <p>60%</p>
                            <div class="box-progress-bar" style="width:280px;margin-left:10px;height:8px;">
                                <span class="box-progress" style="width: 60%; background-color: #ff942e;margin-left:-11px;height:8px;"></span>
                            </div>
                        </td>
                        <td style="outline:2px solid none;">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" alt="profile image">
                            <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" alt="profile image">
                            <button class="add-participant" style="color: #ff942e;outline:2px solid none;border-radius: 50%;
                                        width:40px;height:40px;margin-left:90px;margin-top:-40px;" data-target="anadir_usuarios">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus" style="width:20px;height:20px;">
                                    <path d="M12 5v14M5 12h14"></path>
                                </svg>
                            </button>
                            
                   
                        </td>
                        <td>ALTA</td>
                        
                        <td style="outline:2px solid none;display:flex;" id="botones-td">
                            <button class="btn btn-primary" style="outline:2px solid none;border-radius: 50%;" id="edit-task-btn">
                                <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i> 
                            </button>
                            <button class="btn btn-primary" style="outline:2px solid none;border-radius: 50%;" id="edit-task-btn">
                                <i class="fa fa-trash" title="Editar" onclick="alert('Editar esta tarea')"></i> 
                            </button>
                            <span class="row-toggle" style="z-index: 1;margin-left:55px;margin-top:-3px;">
                                <span class="vertical" style="width:20px;"></span>
                                <span class="horizontal" style="width:20px;"></span>
                            </span>
                        </td>
                        
                    </tr>
                 
                    <tr id="row-1" class="expandable" style="display: none;">
                        <td colspan="6">
                                
                            
                            <div style="background-color: #fee4cb;margin-top:10px;" class="div-expandable">
                                <div class="row">
                                    <div style="margin-top:-14px;font-size:12px;outline:2px solid none;height:20px;margin-left:15px;font-weight: bold;">
                                        DESCRIPCION: 
                                    </div>

                                    <div class="col-lg-8 col-lg-offset-1 col-md-7 col-md-offset-1 mt-2" style="margin-left:-198px;">
                                        <p>Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. But, like most politicians, he promised more than he could deliver. If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.</p>
                                        <p>Tell her you just want to talk. It has nothing to do with mating. Well I'da done better, but it's plum hard pleading a case while awaiting trial for that there incompetence. Is that a cooking show? Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                    <div class="row" style="display:flex;flex-wrap:wrap;justify-content:center;outline:2px solid none;">
                                        <div class="tarea" style="outline:2px solid none;">
                                            <div class="col-xs-6 d-flex " style="outline:2px solid none;background-color: none;">
                                                <p class="w-50 fw-bold">Tarea 1</p> 
                                                <div class="uppercase"><strong><i class="fa fa-check-circle"></i> Complete</strong></div>
                                            </div>
                                            <div class="mini-tarea d-flex">
                                                <input class="col-xs-10 text-left fw-normal" value="- Crear tablas" style="width:145px;margin-top:-3px;background-color:transparent;border:none;" id="ejemplo_subtarea">
                                                <div class="icons">
                                                    <i class="fa fa-check" title="Guardar cambios" style="color:green; cursor:pointer;" onclick="guardarEdicion()"></i>
                                                    <i class="fa fa-times" title="Cancelar edición" style="color:red; cursor:pointer;" onclick="cancelarEdicion()"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="mini-tarea d-flex">
                                                <div class="col-xs-6 text-left fw-normal" style="outline: 2px solid none;width:145px;margin-top:-3px;">- Crear modelo</div>
                                                <div class="icons">
                                                    <i class="fa fa-check " title="Marcar como hecho" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-12"><hr></div>
                                        </div>
                                        <div class="tarea">
                                            <div class="col-xs-6 d-flex " style="outline:2px solid none;background-color: none;">
                                                <p class="w-50 fw-bold">Tarea 2</p> 
                                                <div class="uppercase"><strong><i class="fa fa-check-circle"></i> Complete</strong></div>
                                            </div>
                                            <div class="mini-tarea d-flex">
                                                <div class="col-xs-6 text-left" style="outline: 2px solid none;width:145px;margin-top:-3px;font-weigth:none;">- Crear relaciones</div>
                                                <div class="icons">
                                                    <i class="fa fa-check" title="Marcar como hecho" style="color:grey;" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            <div class="mini-tarea d-flex">
                                                <div class="col-xs-6 text-left" style="outline: 2px solid none;width:145px;margin-top:-3px;">- Crear restricciones</div>
                                                <div class="icons">
                                                    <i class="fa fa-check" title="Marcar como hecho" style="color:grey;" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-12"><hr></div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-xs-6 d-flex" style="font-size: 14px;outline:2px solid none;width:83%;">
                                            <p style="outline:2px solid none;width:60px;margin-left:16px;">Total: </p>
                                            <p style="outline:2px solid none;width:60px;">60%</p>

                                                <div class="uppercase"><strong><i class="fa fa-check-circle"></i> Complete</strong></div>
                                            
                                        </div>
                                
                                        <br>
                                        <br>
                                
                                        <div class="box-progress-bar" style="width:200px;margin-left:10px;height:8px;">
                                            <span class="box-progress" style="width: 60%; background-color: #ff942e;margin-left:-11px;height:8px;"></span>
                                        </div>
                                        <div class="col-xs-12"><hr></div>
                                    
                                        <div class="col-xs-0 text-center" style="margin-top: 0px;" data-toggle="modal" data-target="#modal-subtask"><a href="#" class="btn"><i class="fa fa-check-circle-o"></i> Añadir subtareas</a></div>
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>  
                        </td>
                        
                    </tr>
                   
                    


               
                    </tbody>
                    
                </table>
           
                 </div>
                </div>

        <script>
            
            function displayInputValue(input) {

                if(input.id=="inputTitulo") document.getElementById("titulo-tarea").innerText = input.value;
                if(input.id=="inputDescripcion") document.getElementById("descripcion-tarea").innerText = input.value;
                if(input.id=="inputFechaFinalizacion") {
                    const fecha=new Date(input.value);
                    const formateada=new Intl.DateTimeFormat('es-Es').format(fecha);
                    document.getElementById("fecha-tarea").innerText = formateada;
                }
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

                const input = document.getElementById("inputColor");
                const label = document.querySelector(".color-label");
                const tituloTarea=document.getElementById("titulo-tarea");
                const fechaTarea=document.getElementById("fecha-tarea");
                const descripcionTarea=document.getElementById("descripcion-tarea");

                input.addEventListener("input", function () {
                    label.style.backgroundColor = this.value;
                    $(".table-container.modal-table tbody tr").css("background-color",this.value);
                    $(".table-container.modal-table tbody tr").css("outline","2px solid "+this.value);
                    $(".expandable").css("outline","2px solid "+this.value);
                });

                });







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
                margin-left: 1000px;
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
                margin-left: 350px;
                height: 320px;
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
                height: 800px;
                margin-left: 0px;
                margin-top: -10px;
            }

            .toggle-expandable:hover{
                background-color:#fee4cb9f; 
            }

        </style>