$("video").prop('muted', false);
$(".speaker").click(function() {
    if ($("video").prop('muted')) {
        $("video").prop('muted', false);
    } else {
        $("video").prop('muted', true);
    }
});
$('.speaker').click(function(e) {
e.preventDefault();
$(this).toggleClass('mute');
});
});
