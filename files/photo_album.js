var previous = $('.btn-previous')[0],
    next = $('.btn-next')[0];

$(window).keydown(function (e) {
    if ( e.which === 37 ) {
        window.location.href = previous.href;
    } else if ( e.which === 39 ) {
        window.location.href = next.href;
    }
});
$(window).on( "swiperight", function(e) {
  window.location.href = previous.href;
});
$(window).on( "swipeleft", function(e) {
  window.location.href = next.href;
});
