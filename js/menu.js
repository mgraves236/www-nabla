$('#hamburger').on('click', function() {
  if ($('.main-nav ul').hasClass('hide')) {
     $('.main-nav ul').slideDown().removeClass('hide');
  } else {
     $('.main-nav ul').addClass('hide').slideUp();
  }
   //$('.main-nav ul').toggleClass('hide');
});

// $(window).resize(function(){
//    if($(".main-nav ul").is(':visible')){
//       $('.main-nav ul').removeClass('hide');
//    } else {
//       $('.main-nav ul').addClass('hide');
//    }
// });