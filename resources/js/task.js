$(document).ready(function() {
  
  $('.expandable').hide();

 
  $('tbody tr').click(function() {
    const filaExpandible = $('.expandable');	
    filaExpandible.slideToggle(220);
  });
});