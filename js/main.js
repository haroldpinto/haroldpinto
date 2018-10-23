 $(document).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 

    $('.tech-carrousel').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        variableWidth: false
  });

});

//  $(document).ready(function(){
//   
// });

 $(window).scroll(function () {
	$(window).scrollTop() > 50 ? (

		$("nav").addClass("nav-menu")) : ($("nav").removeClass("nav-menu"))

})

 $('.multi-item-carousel').carousel({
  interval: false
});

// // for every slide in carousel, copy the next slide's item in the slide.
// // Do the same for the next, next item.
// $('.multi-item-carousel .item').each(function(){
//   var next = $(this).next();
//   if (!next.length) {
//     next = $(this).siblings(':first');
//   }
//   next.children(':first-child').clone().appendTo($(this));
  
//   if (next.next().length>0) {
//     next.next().children(':first-child').clone().appendTo($(this));
//   } else {
//     $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
//   }
// });
