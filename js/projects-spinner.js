function setUp($arr) {
    let i = 0;
    while (!$arr.eq(i).hasClass("curr-proj")) {
        $arr.eq(i).css({'opacity': .3 * (i + 1), 'font-size': .8 + (i+1) / 3 + 'em'});
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
    //let curr = $arr.index($('.curr-proj'));
    $arr.eq((next-2) % $arr.length).insertBefore($item);
    $arr.eq((next-1) % $arr.length).insertBefore($item);
    $arr.eq((next+2) % $arr.length).insertAfter($item);
    $arr.eq((next+1) % $arr.length).insertAfter($item);
}


var $links = $('.list-projects a');
$('.projects-container img').attr('src', "img/projects/" + $('.curr-proj').attr('id') + ".png");
setUp($links);

$links.on('click', function() {
    roll($(this), $links);
    //$(this).insertBefore($('.curr-proj'));
    $links = $('.list-projects a');
    $links.removeClass('curr-proj');
    $(this).addClass('curr-proj');
    $('.projects-container img').attr('src', "img/projects/" + $(this).attr('id') + ".png")
    setUp($links);
    $(this).css({'font-size': '1.5em', 'opacity':'1'});
});

$links.on("mouseover", function() {
    $(this).css('color', "#089c9c");
});

$links.on("mouseleave", function() {
    $(this).css('color', "white");
});