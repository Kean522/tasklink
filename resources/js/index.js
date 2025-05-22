document.addEventListener("DOMContentLoaded", function () {
  var modeSwitch = document.querySelector(".mode-switch");

  modeSwitch.addEventListener("click", function () {
    document.documentElement.classList.toggle("dark");
    modeSwitch.classList.toggle("active");
  });

  var listView = document.querySelector(".list-view");
  var gridView = document.querySelector(".grid-view");
  var projectsList = document.querySelector(".project-boxes");

  listView.addEventListener("click", function () {
    gridView.classList.remove("active");
    listView.classList.add("active");
    projectsList.classList.remove("jsGridView");
    projectsList.classList.add("jsListView");
  });

  gridView.addEventListener("click", function () {
    gridView.classList.add("active");
    listView.classList.remove("active");
    projectsList.classList.remove("jsListView");
    projectsList.classList.add("jsGridView");
  });

  document
    .querySelector(".messages-btn")
    .addEventListener("click", function () {
      document.querySelector(".messages-section").classList.add("show");
    });

  document
    .querySelector(".messages-close")
    .addEventListener("click", function () {
      document.querySelector(".messages-section").classList.remove("show");
    });



    //modal 


    const tituloInput = document.getElementById('email');
    const descripcionInput = document.getElementById('descripcion');
    const colorInput = document.getElementById('color');
    const usuariosInput = document.getElementById('usuarios');
    const fechaInput = document.getElementById('fecha');
    const imagenInput = document.getElementById('imagen'); 


    const tituloDisplay = document.getElementById('titulo');
    const descripcionDisplay = document.getElementById('descripcion');
    const fechaDisplay = document.querySelector('.fecha');
    const projectBox = document.querySelector('.project-box');
    const imagenDisplay = document.querySelector('.participants img'); // asume que es la primera imagen
    const usuariosTexto = document.getElementById('usuarios-texto');

  tituloInput.addEventListener('input', () => {
        tituloDisplay.textContent = tituloInput.value;
    });


    descripcionInput.addEventListener('input', () => {
        descripcionDisplay.textContent = descripcionInput.value;
    });


colorInput.addEventListener('input', () => {
        projectBox.style.backgroundColor = colorInput.value;
        const elementosColor = projectBox.querySelectorAll('.days-left, .box-progress span');
        elementosColor.forEach(el => el.style.color = colorInput.value);
        const barra = projectBox.querySelector('.box-progress span');
        barra.style.backgroundColor = colorInput.value;
    });



fechaInput.addEventListener('input', () => {
        fechaDisplay.textContent = fechaInput.value;
    });

    imagenInput.addEventListener('input', () => {
        imagenDisplay.src = imagenInput.value;
    });

    usuariosInput.addEventListener('input', () => {
        if (usuariosTexto) {
            usuariosTexto.textContent = usuariosInput.value;
        }
    });









});


