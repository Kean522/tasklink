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
            <form method="POST" action="#">
                @csrf
                <label for="tarea">Nombre Tarea</label>
                <input type="text" id="inputTitulo" onkeyup="displayInputValue(this)" name="inputTitulo">

                <label for="descripcion">Descripcion</label>
                <input type="text" id="inputDescripcion" onkeyup="displayInputValue(this)" name="inputDescripcion" >

                <label for="">Color</label>
                <label for="inputColor" class="color-label"></label>
                <input type="color" id="inputColor" name="inputColor" class="color-hidden">

                <label for="inputUsuarios">Usuarios</label>
                <select id="inputUsuarios" name="inputUsuarios[]" class="form-control select2bs4" multiple="multiple" data-placeholder="Selecciona usuarios" style="width: 100%;">
                    <option value="usuario1">Usuario 1</option>
                    <option value="usuario2">Usuario 2</option>
                    <option value="usuario3">Usuario 3</option>
                    <option value="usuario4">Usuario 4</option>
                </select>

                <label for="inputDepartamentos">Departamentos</label>
                <select id="inputDepartamentos" name="inputUsuarios[]" class="form-control select2bs4" multiple="multiple" data-placeholder="Selecciona usuarios" style="width: 100%;">
                    <option value="departamento1">Departamento 1</option>
                    <option value="usuario2">Departamento 2</option>
                    <option value="usuario3">Departamento 3</option>
                    <option value="usuario4">Departamento 4</option>
                </select>

                <label for="inputDepartamentos">Nivel de prioridad</label>
                <select id="inputPrioridad" style="width: 100%;">
                    <option value="departamento1">Departamento 1</option>
                    <option value="usuario2">Departamento 2</option>
                    <option value="usuario3">Departamento 3</option>
                    <option value="usuario4">Departamento 4</option>
                </select>
                
                <label for="fecha">Fecha de finalizacion</label>
                <input type="date" id="inputFechaFinalizacion"  name="inputFechaFinalizacion" >

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" style="position: absolute;opacity:0;">
                <button type="button" class="btn" style="margin-top: 3px;">Seleccionar Archivo</button>
                <p style="margin-top:4px;" id="archivo_seleccionado">Ningún archivo seleccionado</p>


                <div class="button-group">
                    <button type="submit" class="btn">CREAR</button>
                    <a class="btn secondary" data-dismiss="modal">CERRAR</a>
                </div>
            </form>
        </div>


        <div class="table-container modal-table">
                <table class="table-cryptic">
                    <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Fecha de Finalización</th>
                        <th>Progreso</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td id="titulo-tarea">Diseñar Base de Datos</td>
                        <td id="fecha-tarea">2025/04/10</td>
                        <td>
                            <p>0%</p>
                            <div class="box-progress-bar" style="width:280px;margin-left:10px;height:8px;">
                                <span class="box-progress" style="width: 60%; background-color: #ff942e;margin-left:-11px;height:8px;"></span>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="row-toggle" style="z-index: 1;">
                                <span class="horizontal"></span>
                                <span class="vertical"></span>
                            </span>
                        </td>
                        
                    </tr>
                 
                    <tr class="expandable" style="display: none;">
                        <td>
                         <div style="width:1200px;">
                                <div class="row">
                                    <div style="margin-left:10px;font-size:12px;">
                                        DESCRIPCION: 
                                    </div>

                                    <div class="col-lg-8 col-lg-offset-1 col-md-7 col-md-offset-1 mt-2" style="margin-left: 8px;" id="descripcion-tarea">
                                        <p>Just once I'd like to eat dinner with a celebrity who isn't bound and gagged. But, like most politicians, he promised more than he could deliver. If rubbin' frozen dirt in your crotch is wrong, hey I don't wanna be right.</p>
                                        <p>Tell her you just want to talk. It has nothing to do with mating. Well I'da done better, but it's plum hard pleading a case while awaiting trial for that there incompetence. Is that a cooking show? Bender! Ship! Stop bickering or I'm going to come back there and change your opinions manually!</p>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                   
                                    </div>
                                </div>
                                </div>  
                            </td>
                        <td>fdsafdasfdsaf</td>
                        <td>fdasfdsafdsafd</td>
                        <td>fdasfdasfdas</td>
                        <td>fdsafdsafvdas</td>
                        <td>fdsafdasfsafsa</td>
                        
                    </tr>
                   
                    


               
                    </tbody>
                    
                </table>
           
                 </div>

        <script>
            $(function () {

                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                        theme: 'bootstrap4'
                    });

                    $('#inputPrioridad').select2({
                        theme: 'bootstrap4'
                    });

                const input = document.getElementById("inputColor");
                const label = document.querySelector(".color-label");

                input.addEventListener("input", function () {
                    label.style.backgroundColor = this.value;
                    $(".table-container.modal-table tbody tr").css("background-color",this.value);
                    $(".table-container.modal-table tbody tr").css("outline","2px solid "+this.value);
                    $(".expandable").css("outline","2px solid "+this.value);
                });

                });







        </script>