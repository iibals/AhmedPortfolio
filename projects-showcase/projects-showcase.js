$(document).ready(function() {
    $('.gallery-box').hover(function() {
        $(this).find('.gallery-category').fadeIn(200);
    }, function() {
        $(this).find('.gallery-category').fadeOut(200);
    });
});
