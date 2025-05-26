
        <div class="contenido">
            <form method="POST" action="#">
                @csrf
                <label for="titulo">Nombre</label>
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
                
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" style="position: absolute;opacity:0;">
                <button type="button" class="btn" style="margin-top: 3px;">Seleccionar Archivo</button>
                <p style="margin-top:4px;" id="archivo_seleccionado">Ningún archivo seleccionado</p>


                <div class="button-group">
                    <button type="submit" class="btn">CREAR</button>
                    <a href="#" class="btn secondary" >CERRAR</a>
                </div>
            </form>
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
                });

                });
        </script>