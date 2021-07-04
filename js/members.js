management = new Array(
    "Damian Ziomko",
    "Weronika Pasek",
    "Magdalena Gołębiowska",
    "Katarzyna Sadecka");

honorary = new Array("mgr Maciej Bieniek");


$('#management').click(function () {
        $('.news-container').toggle("slide", function () {
            $('.news-container').hide();
            $('#members').append(printCard("Management"));
            $('.members-list').append(printMembers(management));
            history.pushState({}, null, "members.php?management");
            $('.clickable-icon').click(toggleStart);
        });
    }
);

$('#honorary').click(function () {
        $('.news-container').toggle("slide", function () {
            $('.news-container').hide();
            $('#members').append(printCard("Honorary members"));
            $('.members-list').append(printMembers(honorary));
            history.pushState({}, null, "members.php?honorary-members");
            $('.clickable-icon').click(toggleStart);
        });
    }
);

(function () {
    if (window.history && window.history.pushState) {
        $(window).on('popstate', toggleStart);
    }
})();

function printCard(name) {
    return "<article class='blur members-list'>" +
        "<span class='clickable-icon'><i class=\"far fa-arrow-alt-circle-left\"></i></span><h1>" + name + "</h1>"
        + "</article>";
}

function printMembers(arr) {
    let str = "<ul>";
    for (let i = 0; i < arr.length; i++) {
        str = str.concat("<li>" + arr[i] + "</li>");
    }
    str.concat("</ul>");
    console.log(str);
    return str;
}

function toggleStart() {

    $('.members-list').hide();
    $('.news-container').toggle("slide", function () {
        $('.news-container').show();
    });
    history.pushState({}, null, "members.php");
}