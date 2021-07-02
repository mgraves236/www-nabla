$(window).resize(function() {
    if ($(window).width() < 1000) {
        $('#space').addClass('blur');
    } else {
        $('#space').removeClass('blur');
    }
}).resize(); // trigger resize event initially