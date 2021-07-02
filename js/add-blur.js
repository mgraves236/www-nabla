$(window).resize(function() {
    if ($(window).width() < 1500) {
        $('#space').addClass('blur');
    } else {
        $('#space').removeClass('blur');
    }
}).resize(); // trigger resize event initially