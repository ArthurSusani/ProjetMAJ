$(function() {

    $('.flexslider').flexslider({
      animation: "slide", 
        slideshow:true, 
        animationSpeed:5000, 
        slideshowSpeed:5000,
        easing: "easeInBounce",
        direction: {next : 'right', prev : 'left'},
    });

    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
});
