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