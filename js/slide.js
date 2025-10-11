$(function(){

  // store the slider in a local variable
  var $window = $(window),
      flexslider;
	
  $window.load(function() {

	$('.kangayam').flexslider({
      animation: "slide",
	  controlNav: false,              
	  animationLoop: true,  
	  slideshow: true,       		
	  slideshowSpeed:2000,
      itemWidth: 0,
      itemMargin: 0,
	  pauseOnAction:true,
	  pauseOnHover:true
    });

  });

}());