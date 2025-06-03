$(document).ready(function() {
  
  $('.expandable').hide();

 
  /*$('tbody tr').click(function() {
    const filaExpandible = $('.expandable');	
    filaExpandible.slideToggle(220);
    $(this).css('display', 'none');
  });*/

  $('.toggle-expandable').click(function() {
    const divExpandibleId = $(this).data('target'); // #row-1
    const divExpandible = $(divExpandibleId); // $('#row-1')
    divExpandible.toggle();
    //$(this).children('td').toggleClass('d-none');
    
  });



});