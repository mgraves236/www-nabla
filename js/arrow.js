$(function() {
    setTimeout('animateArrow()');
});

function animateArrow() {
    $('.fa-arrow-circle-down').animate({
        'top': '-=0.05em'
    }, 1000).animate({
        'top': '+=0.05em'
    }, 1000);
    setTimeout('animateArrow()', 1600);
}


$(window).resize(function() {
    if ($(window).width() < 1200) {
        $('.fa-arrow-circle-down').hide();
    } else {
        $('.fa-arrow-circle-down').show();

        // hide when scrolled down, show when scrolled up
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                $('.fa-arrow-circle-down').fadeTo(100, 1);
            } else {
                $('.fa-arrow-circle-down').fadeTo(100, 0);
            }
            prevScrollpos = currentScrollPos;
        }
    }
}).resize(); // trigger resize event initially

