function setUp($arr) {
    let i = 0;
    while (!$arr.eq(i).hasClass("curr-proj")) {
        $arr.eq(i).css({'opacity': .3 * (i + 1), 'font-size': .7 + (i+1) / 3 + 'em'});
        i++;
    }
    i++;
    while (i < $arr.length) {
        $arr.eq(i).css({'opacity': 1 - .2 * (i - 1), 'font-size': 2 - (i-1) / 3 + 'em'});
        i++;
    }
    $arr.last().css({'opacity': '0'});
}

function roll($item, $arr) {
    let next = $arr.index($item);
    let curr = $arr.index($('.curr-proj'));
    $arr.eq((next-2) % ($arr.length - 1)).insertBefore($item);
    $arr.eq((next-1) % ($arr.length - 1)).insertBefore($item);
    $arr.eq((next+2) % ($arr.length - 1)).insertAfter($item);
    $arr.eq((next+1) % ($arr.length - 1)).insertAfter($item);

    for (i = 0; i < $arr.length; i++) {
        $arr.eq(i).animate({bottom: "-50"}, 0);
        $arr.eq(i).animate({bottom: "0"}, 500);
        // $arr.eq(i).animate({top: "-50"}, 0);
        // $arr.eq(i).animate({top: "0"}, 500);
    }
}


var $links = $('.list-projects a');
$('.projects-container img').attr('src', "img/projects/" + $('.curr-proj').attr('id') + ".png");
setUp($links);

$links.on('click', function() {
    // let next = $links.index($(this));
    // let curr = $links.index($('.curr-proj'));
    if ($(this).css('opacity') > 0) {
        roll($(this), $links);
        $links = $('.list-projects a');
        $links.removeClass('curr-proj');
        $(this).addClass('curr-proj');
        $('.projects-container img').attr('src', "img/projects/" + $(this).attr('id') + ".png")
        setUp($links);
        $(this).css({'font-size': '1.5em', 'opacity': '1'});
    }
    if ($(this).attr('id') === 'FOKA') {
        $('.img-container a').prop({'href': 'http://www.foka.pwr.edu.pl/', 'target': '_blank'});
    } else {
        $('.img-container a').prop({'href': '#', 'target': '_self'});
    }
});

var old = 1;
$links.on("mouseover", function() {
    old = $(this).css('opacity');
    if (old > 0) {
        $(this).css({'color': "#089c9c", 'opacity': 1});
    }
});

$links.on("mouseleave", function() {
    $(this).css({'color': "white", 'opacity': old});
    if ($(this).hasClass('curr-proj')) {
        $(this).css({'opacity': '1'});
    }
});