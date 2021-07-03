$('#nav-icon3').on('click', function() {
    if ($('.main-nav ul').hasClass('hide')) {
        $('.main-nav ul').slideDown().removeClass('hide');
        document.body.style.overflow = "hidden";
    } else {
        $('.main-nav ul').addClass('hide').slideUp();
        document.body.style.overflow = "auto";
    }
    $(this).toggleClass('open');
});
