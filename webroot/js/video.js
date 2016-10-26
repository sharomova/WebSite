/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $('.img-zoom').hover(function () {
        $(this).addClass('transition_video');

    }, function () {
        $(this).removeClass('transition_video');
    });
});