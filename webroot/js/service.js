/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $(".description").fadeIn({queue: false, duration: 3000});

    $(window).scroll(function () {

        /* Check the location of each desired element */
        $('.hideme').each(function (i) {
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if (bottom_of_window > bottom_of_object) {
                $(this).fadeIn(3000);
            }
        });
    });
    $('.img-fluid1').hover(function () {
        $(this).addClass('transition');

    }, function () {
        $(this).removeClass('transition');
    });

    $(".service").flip({
        axis: 'y',
        trigger: 'hover'
    });
});

