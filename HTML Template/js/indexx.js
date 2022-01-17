
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
 showSlides(slideIndex += n);
 }

 function currentSlide(n) {
 showSlides(slideIndex = n);
 }

 function showSlides(n) {
   var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
   slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

  


$(document).ready(function(){
    



  // isotope filter
  var $grid = $(".grid").isotope({
      itemSelector : '.grid-item',
      layoutMode : 'fitRows'
  });
  $(".button-group").on("click", "button", function(){
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue});
    })  




  
    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() >= 1 && $input.val() <= 9){
            $input.val(function(i, oldval){
                return ++oldval;
            });
        }
    });

       // click on qty down button
       $qty_down.click(function(e){
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if($input.val() > 1 && $input.val() <= 10){
            $input.val(function(i, oldval){
                return --oldval;
            });
        }
    });

    


});