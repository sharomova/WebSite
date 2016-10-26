$(document).ready(function () {
    $(".Fade-medium").fadeIn({queue: false, duration: 3000});
    $(".Fade-slow").fadeIn({queue: false, duration: 4000});
    $(".animate-left").animate({queue: false, left: $('.animate-right').outerWidth() + 5}, 3500);
    $(".animate-right").animate({queue: false, right: $('.animate-left').outerWidth()+5}, 3500);
    
    $(function() {
    $('.row').css({
        'position' : 'absolute',
        'left' : '50%',
        'top' : '50%',
        'margin-left' : -$('.row').outerWidth()/2,
        'margin-top' : -$('.row').outerHeight()/2
    });
});
});


