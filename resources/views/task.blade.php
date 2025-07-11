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
 {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery, Popper.js, and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    @vite(['resources/css/task.css'])
    @vite(['resources/css/index.css'])
    @vite(['resources/js/task.js'])
   
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
            <img src="https://assets.codepen.io/3306515/IMG_2025.jpg">
            <span>Aybüke C.</span>
        </button>
    </div>
    <div class="app-content">
    <div class="app-content-header">
        <h1 class="app-content-title">Tasks</h1>

        <div class="projects-section">
            {{-- <div class="container">
            <div class="tabular-data module">
                <div class="data-group">
                <div class="row">
                    <div class="data-expands">
                    <div class="col-lg-1 col-md-1">
                        1245346
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <span class="title">Cromulent waste removal may behoove us.</span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="red uppercase"><strong><i class="fa fa-exclamation-circle"></i> Awaiting Approval</strong>
                        

                        <span class="row-toggle">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </span>
                        </div>
                    </div>
                    </div> --}}
                    {{-- <div class="expandable">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-1 col-md-7 col-md-offset-1">
                        <p>Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. But, like most politicians, he promised more than he could deliver. If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.</p>
                        <p>Tell her you just want to talk. It has nothing to do with mating. Well I'da done better, but it's plum hard pleading a case while awaiting trial for that there incompetence. Is that a cooking show? Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                        </div>
                        <div class="col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-xs-12 visible-sm visible-xs"><hr></div>
                            <div class="col-xs-6">Technician Labor</div>
                            <div class="col-xs-6 text-right">2,400.00</div>
                            <div class="col-xs-6">Parts</div>
                            <div class="col-xs-6 text-right">4,500.00</div>
                            <div class="col-xs-6">Inspection</div>
                            <div class="col-xs-6 text-right">400.00</div>
                            <div class="col-xs-12"><hr></div>
                            <div class="col-xs-6">Total</div>
                            <div class="col-xs-6 text-right">$7,300.00</div>
                            <div class="col-xs-12"><hr></div>
                            <div class="col-xs-6"><a href="#" class="btn btn-black"><i class="fa fa-phone"></i> Contact</a></div>
                            <div class="col-xs-6 text-right"><a href="#" class="btn btn-green"><i class="fa fa-check-circle-o"></i> Approve</a></div>
                        </div>
                        </div>
                    </div>
                    </div> --}}
                {{-- </div>
                </div> --}}
               
                <!-- Table Row -->
            {{-- </div> --}}
            <!-- Table -->
            {{-- </div> --}}
            <!-- Container -->
        {{-- </div> --}}


        
        
            <h2 style="outline:2px solid none;color: #1f1c2e;text-align:center;" >Añadir Tarea</h2>
            <a href="" class="app-sidebar-link active" data-toggle="modal" data-target="#exampleModal_task" >
                <svg xmlns="http://www.w3.org/2000/svg" 
                    width="24" height="24" viewBox="0 0 24 24" 
                    fill="none" stroke="currentColor" stroke-width="2" 
                    stroke-linecap="round" stroke-linejoin="round" 
                    class="feather feather-plus">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
            </a>
                      
            {{-- <div class="modal" id="exampleModal_task" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" style="outline:4px solid none;margin-left:150px;">
                    @include('modals.form_task')
            </div> 
            <div class="modal" id="modal-subtask" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" >
                    @include('modals.form_subtask')
            </div>  --}}
            <div class="modal" id="exampleModal_task" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" style="position: absolute;">
               @include('modals.form_task')
            </div> 
            <div class="grid-container">
            <div class="box box-1">
                <h2 style="color: #1f1c2e">Tareas</h2>
                <div class="table-container">
                <table class="table-cryptic" >
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
                            {{-- <div style="position: absolute;margin-top:0px;margin-left:-10px;">
                        <!-- El modal con triángulo -->
                        <div class="tooltip-modal" style="background-color:#fee4cb;">
                            <div class="tooltip-arrow"></div>
                            <div class="tooltip-box">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" alt="profile image">
                            <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2550&amp;q=80" alt="profile image">
                            </div>
                            <select id="inputUsuarios" name="inputUsuarios[]" class="form-control select2bs4" multiple="multiple" data-placeholder="Selecciona usuarios" 
                            style="background-color: #fee4cb">
                                <option value="usuario1" style="background-color:#fee4cb;">Usuario 1</option>
                                <option value="usuario2" style="background-color:#fee4cb;">Usuario 2</option>
                                <option value="usuario3" style="background-color:#fee4cb;">Usuario 3</option>
                                <option value="usuario4" style="background-color: #fee4cb;">Usuario 4</option>
                            </select>
                        </div>
                        </div> --}}
                   
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
                 
                    <tr id="row-1" class="expandable">
                        <td colspan="6">
                                
                            {{-- <div class="expandable-content"> --}}
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
                                                <input class="col-xs-10 text-left fw-normal" value="- Crear tablas" style="width:145px;margin-top:-3px;background-color:transparent;border:none;" id="ejemplo_subtarea"></input>
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
                   
                    {{-- <tr class="expandable">
                     
                        <td>
                                
                            <div style="background-color: #fee4cb;width:1200px;">
                                <div class="row">
                                    <div style="margin-left:10px;font-size:12px;">
                                        DESCRIPCION: 
                                    </div>

                                    <div class="col-lg-8 col-lg-offset-1 col-md-7 col-md-offset-1 mt-2" style="margin-left: 8px;">
                                        <p>Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. But, like most politicians, he promised more than he could deliver. If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.</p>
                                        <p>Tell her you just want to talk. It has nothing to do with mating. Well I'da done better, but it's plum hard pleading a case while awaiting trial for that there incompetence. Is that a cooking show? Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                    <div class="row">
                                        <div class="tarea">
                                            <div class="col-xs-6 d-flex " style="outline:2px solid none;background-color: none;">
                                                <p class="w-50 fw-bold">Tarea 1</p> 
                                                <div class="uppercase"><strong><i class="fa fa-check-circle"></i> Complete</strong></div>
                                            </div>
                                            <div class="mini-tarea d-flex">
                                                <div class="col-xs-6 text-right fw-normal" style="outline: 2px solid none;width:145px;">- Crear tablas</div>
                                                <div class="icons">
                                                    <i class="fa fa-check" title="Marcar como hecho" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="mini-tarea d-flex">
                                                <div class="col-xs-6 text-right fw-normal" style="outline: 2px solid none;width:145px;">- Crear modelo</div>
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
                                                <div class="col-xs-6 text-right fw-normal" style="outline: 2px solid none;width:145px;">- Crear relaciones</div>
                                                <div class="icons">
                                                    <i class="fa fa-check" title="Marcar como hecho" style="color:grey;" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            <div class="mini-tarea d-flex">
                                                <div class="col-xs-6 text-right fw-normal" style="outline: 2px solid none;width:145px;">- Crear restricciones</div>
                                                <div class="icons">
                                                    <i class="fa fa-check" title="Marcar como hecho" style="color:grey;" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            <div class="col-xs-12"><hr></div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-xs-6 d-flex" style="font-size: 14px;">
                                            <p style="width:50px;">Total: </p>
                                            <p style="width:100px;">60%</p>

                                                <div class="uppercase"><strong><i class="fa fa-check-circle"></i> Complete</strong></div>
                                            </i>
                                        </div>
                                
                                        <br>
                                        <br>
                                
                                        <div class="box-progress-bar" style="width:280px;margin-left:10px;height:8px;">
                                            <span class="box-progress" style="width: 60%; background-color: #ff942e;margin-left:-11px;height:8px;"></span>
                                        </div>
                                        <div class="col-xs-12"><hr></div>
                                    
                                        <div class="col-xs-0 text-right"><a href="#" class="btn"><i class="fa fa-check-circle-o"></i> Approve</a></div>
                                    </div>
                                    </div>
                                </div>
                                </div>  
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> --}}


               
                    </tbody>
                    
                </table>
           
                 </div>
                </div>
                </div>
        </div>
        
  
   
    </div>
    
    </div>
   

</body>
</html>


{{-- <div class="col-xs-6 d-flex " style="outline:2px solid none;background-color: #f79c48;">
                                <p class="w-50">Tarea 3</p> 
                                <div class=" red uppercase"><strong><i class="fa fa-exclamation-circle"></i> AWAITING APPROVAL</strong></div>
                            
                            {{-- <div class="col-xs-6 d-flex " style="outline:2px solid none;background-color: #f79c48;">
                                <p class="w-50">Tarea 4</p> 
                                <div class=" red uppercase"><strong><i class="fa fa-exclamation-circle"></i> AWAITING APPROVAL</strong></div>
                            </div>
                            <div class="col-xs-6 text-right fw-normal">4,500.00</div>   
                             --}}


                              {{-- <div class="col-xs-12 visible-sm visible-xs"><hr></div>
                            <div class="col-xs-6 d-flex " style="outline:2px solid NONE;">
                                <p class="w-50">Tarea 1</p> 
                                <div class="green uppercase ">
                                    <strong>
                                        <i class="fa fa-check-circle"></i> Approved
                                    </strong>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right fw-normal">2,400.00</div>
                            <div class="col-xs-6 d-flex " style="outline:2px solid none;">
                                <p class="w-50">Tarea 2</p> 
                                <div class="uppercase ">
                                    <strong>
                                       <i class="fa fa-wrench"></i> IN PROGRESS
                                    </strong>
                                </div>
                            </div>
                            <div class="col-xs-6 text-right fw-normal">- Crear informes</div>
                            <div class="col-xs-6 text-right fw-normal">- Filtrar los datos</div> --}}

                                {{-- <div class="col-xs-6"><a href="#" class="btn btn-black"><i class="fa fa-phone"></i> Contact</a></div> --}}

                                <style>
                                    img{
                                        border-radius: 50%;
                                        object-fit: cover;
                                        width: 40px;
                                        height: 40px;
                                        border-style: none;
                                        
                                    }
                                    #edit-task-btn{
                                        border-radius: 50%;
                                        object-fit: cover;
                                        width: 40px;
                                        height: 40px;
                                        display: flex;
                                        flex-wrap: wrap;
                                        justify-content: center;
                                        outline:2px solid none;
                                        align-items: center;
                                    }
                                    #edit-task-btn i{
                                        margin-top: -2px;
                                    }
                                    #botones-td{
                                        margin-left: -10px;
                                    }
                                    .div-expandable .row{
                                        outline:2px solid none;
                                        display: flex;
                                        justify-content: space-between;
                                    }
                                    /* .add-participant{
                                        outline:2px solid red;
                                    } */

                                    .toggle-expandable:hover .row-toggle{
                                        transform:rotate(90deg);
                                    }
                                    #ejemplo_subtarea:focus{
                                        outline:none;
                                    }


                                    .tooltip-box {
                                    background-color: #fff8f0;
                                    border: 2px solid #f79c48;
                                    padding: 10px;
                                    border-radius: 6px;
                                    width: 140px;
                                    text-align: center;
                                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
                                    font-family: sans-serif;
                                    font-size: 14px;
                                    
                                    }

                                    .tooltip-arrow {
                                        width: 0;
                                        height: 0;
                                        border-left: 8px solid transparent;
                                        border-right: 8px solid transparent;
                                        border-top: 8px solid #f79c48;
                                        rotate: 178deg;
                                        margin-left: 60px;                                        
                                    }
                               
                                
                                </style>

<script>
    $('.toggle-expandable').on("click", function () {
        $('.expandable').toggle();
    });
</script>