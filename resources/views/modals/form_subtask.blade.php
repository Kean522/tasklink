<div class="table-container" id="form_subtask">
                <table class="table-cryptic">
                    <thead>
                        <p class="position-absolute font-weight-bold" style="margin-left:149px;font-size:14px;margin-top:15px;">TAREA</p>
                    <tr id="cabezado">
                        <th style="opacity: 0;">Tarea</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="row d-flex" style="flex-wrap:wrap;justify-content:center;" id="tareas">
                                        <div class="tarea" style="outline:2px solid none;width:250px;margin-left:55px;" id="tarea-1">
                                            <div class="col-xs-6" style="display: flex;">
                                                <p class="w-50 fw-bold">Tarea 1</p> 
                                                <div class="uppercase"><strong><i class="fa fa-check-circle"></i> Complete</strong></div>
                                            </div>
                                            <div class="mini-tarea" style="display:flex;outline:2px solid none;">
                                                <div class="col-xs-10 text-left fw-normal" style="width:130px;">- Crear tablas</div>
                                                <div class="icons">
                                                    <i class="fa fa-check" style="" title="Marcar como hecho" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" id="ejemplo" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="mini-tarea" style="display:flex;outline:2px solid none;">
                                                <div class="col-xs-6 text-left fw-normal" style="width:130px;">- Crear modelo</div>
                                                <div class="icons">
                                                    <i class="fa fa-check " style="" title="Marcar como hecho" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="tarea" style="outline:2px solid none;width:250px;margin-left:55px;" id="tarea-2">
                                            <div class="col-xs-6" style="display: flex;">
                                                <p class="w-50 fw-bold">Tarea 2</p> 
                                                <div class="uppercase"><strong><i class="fa fa-check-circle"></i> Complete</strong></div>
                                            </div>
                                            <div class="mini-tarea" style="display:flex;outline:2px solid none;">
                                                <div class="col-xs-10 text-left fw-normal" style="width:130px;">- Crear rodrigo</div>
                                                <div class="icons">
                                                    <i class="fa fa-check" style="" title="Marcar como hecho" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            
                                            <div class="mini-tarea" style="display:flex;outline:2px solid none;">
                                                <div class="col-xs-6 text-left fw-normal" style="width:130px;">- Crear carlos</div>
                                                <div class="icons">
                                                    <i class="fa fa-check " style="" title="Marcar como hecho" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>
                                            
                                          
                                        </div>
                                        <p style="outline: 2px solid none;width:250px;margin-top:18px;text-align:center;margin-left:20px;">30%</p>
                                        <div class="box-progress-bar" style="width:250px;height:7px;margin-left:40px;margin-top:-7px;"> 
                                            <span class="box-progress" style="width: 60%; background-color: #ff942e;"></span>
                                        </div>
                                    </div>
                      
                            </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>

                    
                    </tbody>
                    
                </table>
           
                 </div>


 <div class="contenido">
            <form action="#">
                @csrf
                
                <label for="tarea">Tareas</label>
                <select id="tareasSelect" class="form-control" onchange="verificarSeleccion()">
                    <option value="Tarea 1">Tarea 1</option>
                    <option value="Tarea 2">Tarea 2</option>
                    <option value="nueva">+ Nueva tarea...</option>
                </select>


                {{-- <button type="button"
                    class="btn btn-outline-primary"
                    style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    font-size: 1.2rem;
                    width: 30px;
                    height: 30px;
                    border-radius: 50%;
                    position: absolute;
                    margin-left: 378px;
                    margin-top: -37px;
                    padding: 0;
                    "
                    onclick="mostrarInputTarea()">
            +
            </button> --}}
                <div id="nuevoInputTarea" style="margin-top: 10px; display: block;">
                    <input type="text" class="form-control" placeholder="Nueva tarea" id="inputNuevaTarea">
                    <button class="btn btn-sm btn-success mt-2" style="margin-left:-2px;">Guardar tarea</button>
                    </div>
                <label for="descripcion">Subtarea</label>
                <input type="text" id="inputSubtarea"  name="inputDescripcion" placeholder="Nueva subtarea" style="margin-left:2px;">


                {{-- <label for="tarea">Nombre Tarea</label>
                <input type="text" id="inputTitulo"  name="inputTitulo"> --}}

                
                {{-- <label for="fecha">Fecha de finalizacion</label>
                <input type="date" id="inputFechaFinalizacion"  name="inputFechaFinalizacion" > --}}

                {{-- <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" style="position: absolute;opacity:0;">
                <button type="button" class="btn" style="margin-top: 3px;">Seleccionar Archivo</button>
                <p style="margin-top:4px;" id="archivo_seleccionado">Ningún archivo seleccionado</p> --}}


                <div class="button-group" style="margin-left:-4px;margin-top:6px;">
                    <button type="button" class="btn" id="botonAnadirSubtarea">Añadir subtarea</button>
                </div>
            </form>
        </div>


        <script>
            $('#nuevoInputTarea').hide();
           
            $( "#tareasSelect" ).on( "change", function() {
                if( $(this).val()=="nueva")$('#nuevoInputTarea').show();
                else $('#nuevoInputTarea').hide();
                if($(this).val()=="Tarea 1") {
                    $('#tarea-1').show();
                    $('#tarea-2').hide();
                } else if ($(this).val()=="Tarea 2") {
                    $('#tarea-2').show();
                    $('#tarea-1').hide();
                } 
            });

             $('#inputUsuarios').select2({
                theme: 'bootstrap4'
            });


            
             $('#botonAnadirSubtarea').click(function() {
                const subtarea=$('#inputSubtarea').val();
                $('#tarea-2').append(`<div class="mini-tarea" style="display:flex;outline:2px solid none;">
                                                <div class="col-xs-6 text-left fw-normal" style="width:130px;">- ${subtarea}</div>
                                                <div class="icons">
                                                    <i class="fa fa-check " style="" title="Marcar como hecho" onclick="alert('Marcado como hecho')"></i>
                                                    <i class="fa fa-edit" title="Editar" onclick="alert('Editar esta tarea')"></i>
                                                    <i class="fa fa-trash" title="Borrar" onclick="alert('Borrar esta tarea')"></i>
                                                </div>
                                            </div>`);
             });




            //   function mostrarInputTarea() {
            //         if(document.getElementById('nuevoInputTarea').style.display == 'block')document.getElementById('nuevoInputTarea').style.display = 'none';
            //         else document.getElementById('nuevoInputTarea').style.display = 'block';
            //     }

                
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
   


    
</style>