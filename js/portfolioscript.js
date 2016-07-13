 $(document).ready(function(){


 //Collapse the nav bar on scrolling bottom
  $(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
      $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
  });
  
 // Closes the Responsive Menu on Menu Item Click in Small Screens
  $('.navbar-collapse ul li a').click(function() {
      $('.navbar-toggle:visible').click();
  });

});