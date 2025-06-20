 
         
           
    <div class="project-box" style="background-color:rgb(101, 101, 146)">
                    <div class="project-box-header">
                        @php
                         
                        @endphp
                        <span onclick="changeColorFont(this)" data-value='1' id="font">Enero 20,2030</span>
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
                        <p class="box-content-header" onclick="changeColorFont(this)" data-value='2' id="font">Lenguajes de programacion</p>
                        <p class="box-content-subheader"  onclick="changeColorFont(this)" data-value='3' id="font">JavaScript,Java,C#,CSS,HTML</p>
                        {{-- <p class="box-content-header">{{$proyecto->name}}</p>
                        <p class="box-content-subheader">{{$proyecto->description}}</p> --}}
                    </div>
                    <div class="box-progress-wrapper">
                        <p class="box-progress-header" onclick="changeColorFont(this)" data-value='4' id="font">Progress</p>
                        <div class="box-progress-bar">
                            <span class="box-progress"></span>
                        </div>
                        <p class="box-progress-percentage" onclick="changeColorFont(this)" data-value='5' id="font">20%</p>
                        <div class="days-left editar" onclick="changeColorFont(this)" data-value='6' id="font">
                           <p>Editar</p> 
                        </div>
                        <div class="days-left ver" onclick="changeColorFont(this)" data-value='7' id="font" >
                            <p>Ver</p>
                        </div>
                    </div>
                    <div class="project-box-footer">
                    <div class="participants">
                        {{-- Participantes --}}

                        
                   
                        <button class="add-participant" onclick="changeColorFont(this)" id="font">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                <path d="M12 5v14M5 12h14" />
                            </svg>
                        </button>
                    </div>
                    <div class="days-left" id="days-left" onclick="changeColorFont(this)" data-value='8' id="font"> 
                        @php
                            echo "Dias Restantes";
                        @endphp    
                    </div>
                    </div>

                </div>
       
          
       
        <div class="contenido">
            <form action="{{route('project.create')}}"  method="POST" enctype='multipart/form-data'>
                @csrf
                @method('POST')
                <label for="titulo">Titulo</label>
                <input type="text" id="inputTitulo" onkeyup="displayInputValue(this)" name="titulo">

                <label for="descripcion">Descripcion</label>
                <input type="text" id="inputDescripcion" onkeyup="displayInputValue(this)" name="descripcion" >

                <label for="">Color fondo</label>
               <label for="inputColor" class="color-label"></label>
                <input type="color" id="inputColor" name="color" class="color-hidden">

                <label for="">Color fuente</label>
                <label for="inputColorFuente" class="color-label-fuente">
                    <i class="fa-solid fa-arrow-pointer" style="color:black;"></i>
                </label>
                <label for="">Pulsa sobre la letra para cambiar de color</label>
                <input type="color" id="inputColorFuente" name="color" class="color-hidden-font">
                <input type="hidden" name="colorElegido" id="colorElegido" value="">
                <input type="hidden" name="etiquetaElegida" id="etiquetaElegida" value="">
                <label for="inputUsuarios">Usuarios</label>
                <input type="hidden" name="font" id="colorFonts" value="">
                <input type="hidden" name="projectBackgroundColor" id="projectBackgroundColor" value="">
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
                    </div>
                </div>

                <label for="fecha">Fecha de finalizacion</label>
                <input type="date" id="inputFechaFinalizacion"  name="fechaFinalizacion" >

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
                if(input.id=="inputTitulo") document.querySelector(".box-content-header").innerHTML=input.value;
                if(input.id=="inputDescripcion") document.querySelector(".box-content-subheader").innerHTML=input.value;
                if(input.id=="inputColor") document.querySelector("titulo").innerHTML=input.value;
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
                        document.querySelector('#exampleModal .project-box').style.background = this.value;
                        document.getElementById('projectBackgroundColor').value=this.value;
                    });
                    document.getElementById('inputColorFuente').addEventListener('input', function() {
                        document.querySelector('#exampleModal .color-label-fuente').style.background = this.value;
                        document.body.style.cursor='crosshair';
                        document.querySelector('#exampleModal .add-participant').style.cursor='crosshair';
                        document.querySelector('#exampleModal .project-box').style.cursor='crosshair';
                        const colorElegido=this.value;
                        document.getElementById('colorElegido').value=colorElegido;
                    });
                }

                function changeColorFont(element){
                    const colorElegido=document.getElementById('colorElegido').value;
                    element.style.color=colorElegido;
                    saveColorFont();
                }

                saveColorFont();
                function saveColorFont(){
                    let colores=[];
                    let palabras=document.querySelectorAll('#font');
                    palabras.forEach(palabra => {
                        let colorRGB=palabra.style.color;
                        let colorHEX;
                        if(colorRGB===null || colorRGB==null || colorRGB=='' ||colorRGB==' ') colorHEX="#000000";
                        else{
                            colorHEX=rgbStringToHex(colorRGB);
                            console.log(colorHEX);
                        }
                        colores.push(colorHEX);
                        
                    });
                    document.getElementById('colorFonts').value=colores;
                    
                }
                
                function mostrarDropdownContent(){
                    $('.dropdown-button').on('click',function(){
                        $('.dropdown-content').toggle();
                    });
                }
                mostrarDropdownContent();

                function seleccionarUsuariosDisponibles(element){
                    const usuarioSeleccionado=element;
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
                    let usuario=`
                        <div class="dropdown-option" data-value="${valorUsuario}" style="outline:2px solid none;" onclick="seleccionarUsuariosDisponibles(this)">
                            ${usuarioSeleccionado.innerHTML}
                        </div>
                            `;
                    usuarioSeleccionado.remove();
                    document.getElementById('usuarios-disponibles').innerHTML+=usuario;  
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
                    return null;  // o un valor por defecto
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
#exampleModal .project-box-content-header{
    display: flex;
    flex-wrap: wrap;
    outline:2px solid none;
}
#exampleModal .box-content-header{
    outline:2px solid none;
    width: 315px;
    /* 63 */
}
#exampleModal .box-content-subheader{
    outline: 2px solid none;
}
</style>