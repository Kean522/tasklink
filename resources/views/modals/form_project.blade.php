
<div class="project-box modal" style="background-color: #e9e7fd;">
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
            <div class="days-left lbl" id="days_left" style="color: #4f3ff0;" >
                <p style="width: 100%;height:0px;margin-top:6px;"> 2 Days Left</p>
            </div>
            </div>
        </div>
       
        <div class="contenido">
            <form action="#">
                @csrf
                <label for="titulo">Titulo</label>
                <input type="text" id="inputTitulo" onkeyup="displayInputValue(this)" name="inputTitulo">

                <label for="descripcion">Descripcion</label>
                <input type="text" id="inputDescripcion" onkeyup="displayInputValue(this)" name="inputDescripcion" >

                <label for="">Color</label>
               <label for="inputColor" class="color-label"></label>
                <input type="color" id="inputColor" name="inputColor" class="color-hidden">

                <label for="inputUsuarios">Usuarios</label>
                <div style="outline:1px solid rgba(128, 128, 128, 0.562);min-height:33px;border-radius:3px;display:flex;flex-wrap:wrap;" class="usuarios-elegidos">
                    
                </div>
                
                <div class="custom-dropdown">
                    <button class="dropdown-button">Selecciona un Usuario</button>
                    <div class="dropdown-content" style="display:none;">
                        <div class="dropdown-option usuario-disponible" data-value="usuario1" style="outline:2px solid red;">
                            <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="Usuario 1">
                            Usuario1
                        </div>
                        <div class="dropdown-option usuario-disponible" data-value="usuario2" >
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Usuario 2">
                            Usuario2
                        </div>
                        <div class="dropdown-option usuario-disponible" data-value="usuario3">
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Usuario 3">
                            Usuario3
                        </div>
                        <div class="dropdown-option usuario-disponible" data-value="usuario4">
                            <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="Usuario 4">
                            Usuario4
                        </div>
                    </div>
                </div>

                <label for="fecha">Fecha de finalizacion</label>
                <input type="date" id="inputFechaFinalizacion"  name="inputFechaFinalizacion" >

                <label for="imagen">Imagen</label>
                <input type="file" id="inputImagen" name="imagen" style="position: absolute;opacity:0;z-index:-1;">
                <button type="button" class="btn" style="margin-top: 3px;" id="seleccionar-archivo">Seleccionar Archivo</button>
                <p style="margin-top:4px;" id="archivo_seleccionado">Ningún archivo seleccionado</p>


                <div class="button-group">
                    <button type="submit" class="btn">Crear</button>
                    <a href="#" class="btn secondary">Cerrar</a>
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
            uploadImage();
            function uploadImage(){
                $('#seleccionar-archivo').click(function(e){
                    $('#inputImagen').click();
                });
                $('#inputImagen').on('change',function(){
                    let archivos=this.files;
                    if(archivos) $('#archivo_seleccionado').html(`${archivos[0].name}`);
                });
            }
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
                        document.querySelector('.project-box.modal').style.background = this.value;
                    });
                }
                
                function mostrarDropdownContent(){
                    $('.dropdown-button').on('click',function(){
                        $('.dropdown-content').toggle();
                        anadirUsuario();
                    });
                }
                mostrarDropdownContent();


                function anadirUsuario(){
                    $('.usuario-disponible').each(function(){
                        $(this).on( "click", function() {
                            $(this).append(`<i class="fas fa-times" style="outline:2px solid red;margin-left:4px;z-index:1;"></i>`);
                            $('.usuarios-elegidos').append($(this));
                            eliminarUsuario();
                        });

                    });
                }


                function eliminarUsuario(){
                    $('.usuarios-elegidos .usuario-disponible i').each(function(){
                        $(this).on( "click", function() {
                            const usuario=$(this).parent();
                            console.log(usuario);
                            $('.dropdown-content').append( usuario );
                        });
                    });
                }


                const input = document.getElementById("inputColor");
                const label = document.querySelector(".color-label");

                input.addEventListener("input", function () {
                    label.style.backgroundColor = this.value;
                });

</script>


<style>
    /* Contenedor principal del dropdown */
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
    width: 100%;
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
#usuariosElegidos{
    outline:1px solid rgba(128, 128, 128, 0.562);
    min-height:33px;
    border-radius:3px;
    display:flex;
    flex-wrap:wrap;
}
#usuariosElegidos .dropdown-option{
    height:33px;
    border:none;
    outline:2px solid none;
    width:140px;
}
#usuariosElegidos .dropdown-option img{
    height:33px;
    width:45px;
}
#usuariosElegidos .dropdown-option p{
    width:80px;
    outline:2px solid none;
}
 #usuariosElegidos .dropdown-option i{
    margin-left:8px;
    outline:2px solid none;
}

</style>