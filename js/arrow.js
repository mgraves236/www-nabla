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
        $('.fa-arrow-circle-down').addClass('hide');
    } else {
        $('.fa-arrow-circle-down').removeClass('hide');
    }
}).resize(); // trigger resize event initially
