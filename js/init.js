(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

    // Close sidenav when resizing to desktop width
    $(window).on('resize', function () {
      if ($(window).width() >= 992) {
        var instance = M.Sidenav.getInstance(document.querySelector('.sidenav'));
        if (instance && instance.isOpen) {
          instance.close();
        }
      }
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space
