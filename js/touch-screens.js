$('.far').on('touchstart', function (e) {
    'use strict'; //satisfy code inspectors
    var link = $(this); //preselect the link
    if (link.hasClass('icon-hover')) {
        return true;
    } else {
        link.addClass('icon-hover');
        $('.far').not(this).removeClass('icon-hover');
        e.preventDefault();
        return false; //extra, and to make sure the function has consistent return points
    }
});