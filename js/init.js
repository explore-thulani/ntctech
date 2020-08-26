(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.carousel').carousel();
    $('.parallax').parallax();
    $('.modal').modal();
    $('.materialboxed').materialbox();
    $('select').formSelect();
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        duration: 20
      });

  }); // end of document ready
})(jQuery); // end of jQuery name space
