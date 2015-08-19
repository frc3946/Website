/*
var next = jQuery.Event("keydown");
next.which = 39; // # Some key code value
$(".btn-next").trigger(next);

var previous = jQuery.Event("keydown");
previous.which = 37; // # Some key code value
$(".btn-previous").trigger(previous);
*/

var previous = $('.btn-previous')[0],
    next = $('.btn-next')[0];

$(window).keydown(function (e) {
    if ( e.which === 37 ) {
        window.location.href = previous.href;
    } else if ( e.which === 39 ) {
        window.location.href = next.href;
    }
});
