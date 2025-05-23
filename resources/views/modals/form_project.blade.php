
<div class="project-box" style="background-color: #e9e7fd;">
            <div class="project-box-header">
            <span class="fecha" id="fecha">December 10, 2020</span>
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
            <p class="box-content-header"  id="titulo">Testing</p> 
            <p class="box-content-subheader" id="descripcion">Prototyping</p>
            </div>
            <div class="box-progress-wrapper">
            <p class="box-progress-header">Progress</p>
            <div class="box-progress-bar">
                <span class="box-progress" style="width: 50%; background-color: #4f3ff0"></span>
            </div>
            <div class="days-left editar" style="color: #4f3ff0;">
                Editar
            </div>
            <div class="days-left ver" style="color: #4f3ff0;">
                Ver
            </div>
            <p class="box-progress-percentage">50%</p>
            </div>
            
            <div class="project-box-footer">
            <div class="participants" id="usuarios">
                <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="participant">
                <img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="participant">
                <button class="add-participant" style="color: #4f3ff0;">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                </button>
            </div>
            <div class="days-left lbl" id="days_left" style="color: #4f3ff0;">
                2 Days Left
            </div>
            </div>
        </div>



        <div class="contenido">
            <form method="POST" action="#">
                @csrf
                <label for="titulo">Titulo</label>
                <input type="text" id="inputTitulo" onkeyup="displayInputValue(this)" name="inputTitulo">

                <label for="descripcion">Descripcion</label>
                <input type="text" id="inputDescripcion" onkeyup="displayInputValue(this)" name="inputDescripcion" required>

                <label for="color">Color</label>
                <input type="color" id="inputColor"  name="inputColor" required>

                <label for="inputUsuarios">Usuarios</label>
                <select id="inputUsuarios" name="inputUsuarios[]" class="form-control select2bs4" multiple="multiple" data-placeholder="Selecciona usuarios" style="width: 100%;">
                    <option value="usuario1">Usuario 1</option>
                    <option value="usuario2">Usuario 2</option>
                    <option value="usuario3">Usuario 3</option>
                    <option value="usuario4">Usuario 4</option>
                </select>

                <label for="fecha">Fecha de finalizacion</label>
                <input type="date" id="inputFechaFinalizacion"  name="inputFechaFinalizacion" required>

                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" style="position: absolute;opacity:0;">
                <button type="submit" class="btn" style="margin-top: 3px;">Seleccionar Archivo</button>
                <p style="margin-top:4px;" id="archivo_seleccionado">Ningún archivo seleccionado</p>


                <div class="button-group">
                    <button type="submit" class="btn">LOG IN</button>
                    <a href="#" class="btn secondary">REGISTER</a>
                </div>
            </form>
        </div>


        <script>
             function displayInputValue(input){
                if(input.id=="inputTitulo") document.getElementById("titulo").innerHTML=input.value;
                if(input.id=="inputDescripcion") document.getElementById("descripcion").innerHTML=input.value;
                if(input.id=="inputColor") document.getElementById("titulo").innerHTML=input.value;
                if(input.id=="inputUsuarios") document.getElementById("usuarios").innerHTML=input.value;
                if(input.id=="inputFechaFinalizacion") {
                    
                }
             }


            displayDate();
            displayColor();
            function displayDate(){
                document.getElementById('inputFechaFinalizacion').addEventListener('change', function() {
                        var input_date_time=new Date(this.value).getTime();
                        var actual_date_time=new Date().getTime();
                        var diff_dias=Math.abs((actual_date_time-input_date_time)/(1000*60*60*24));
                        document.getElementById('days_left').innerHTML=`${Math.trunc(diff_dias)} Days Left`;
                    });
                }
                function displayColor(){
                     document.getElementById('inputColor').addEventListener('input', function() {
                        document.querySelector('.project-box').style.background = this.value;
                    });
                }
                function recolectarUsuario(){

                }


                 $(function () {
                    //Initialize Select2 Elements
                    $('.select2bs4').select2({
                        theme: 'bootstrap4'
                    });



                });
    
</script>
