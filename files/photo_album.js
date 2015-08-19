var next = jQuery.Event("keydown");
next.which = 39; // # Some key code value
$(".btn-next").trigger(next);

var previous = jQuery.Event("keydown");
previous.which = 37; // # Some key code value
$(".btn-previous").trigger(previous);
