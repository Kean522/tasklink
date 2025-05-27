// const filasOcultas = document.querySelectorAll('.expandable');
// filasOcultas.forEach((filaOculta) => {
// 	filaOculta.addEventListener('click', () => {
// 		filasOcultas[0].style.display = 'none';
// 	});
// });
// filasOcultas.forEach((filaOculta) => {
// 	filaOculta.style.display = 'none';
// });
// const filas= document.querySelectorAll('tbody tr');



// filas.forEach((fila) => {
// 	fila.addEventListener('click', () => {
// 		if(filasOcultas[0].style.display == 'table-row') filasOcultas[0].style.display = 'none';
// 		else filasOcultas[0].style.display = 'table-row';
//   	});
// });

// filasOcultas.forEach((filaOculta) => {
// 	filaOculta.addEventListener('click', () => {
    	
//   	});
// });



$(document).ready(function() {
  // Oculta todas las filas expandibles
  $('.expandable').hide();

  // Manejador de clic para filas normales
  $('tbody tr').click(function() {
    const filaExpandible = $('.expandable');	
    filaExpandible.slideToggle(220);
	const miniDescripcion=$('.mini-descripcion');
	
  });
});