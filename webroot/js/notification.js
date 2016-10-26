/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
 $('.close').click(function(){
     $(this).parent().fadeOut();
     return false;
 });

 $('.alert_notification').animate({opacity: 1.0}, 4000).fadeOut();
});