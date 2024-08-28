$(document).ready(function() {
    $('.design-container').hover(function() {
        $(this).find('.design-category').fadeIn(200);
    }, function() {
        $(this).find('.design-category').fadeOut(200);
    });
    $('.btn-bgColor').click(function() {
        $('.btn-bgColor').removeClass('active');
        $(this).addClass('active');
    });
});
