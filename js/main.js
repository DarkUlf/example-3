$(function(){ $('.equalize').equalHeights(); });

$(document).ready(function(){
    $("#full-txt").click(function(){
        $("#unvi-txt").toggle(500);
    });
});

var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    direction: 'vertical'
});

$('#arrow').click(function(){
    $('html, body').animate({scrollTop:$('#s-1').position().top}, 500);
});

$('.checkbox-change').change(function() {
    $('.submit-mod').removeClass('submit-enable submit-able')
        .addClass($(this).prop('checked') ? 'submit-able' : 'submit-enable');
});