jQuery(document).ready(function($){
redrawDotNav();
$(window).bind('scroll',function(e){redrawDotNav();});
$('.n_1').click(function(){$('html, body').animate({scrollTop:0}, 1000);return false;});
$('.n_2').click(function(){$('html, body').animate({scrollTop:$('#how').offset().top}, 1000);return false;});
$('.n_3').click(function(){$('html, body').animate({scrollTop:$('#whatis').offset().top}, 1000);return false;});
$('.n_4').click(function(){$('html, body').animate({scrollTop:$('#prod').offset().top}, 1000);return false;});
$('.n_5').click(function(){$('html, body').animate({scrollTop:$('#sotrud').offset().top}, 1000);return false;});

$('#side a').hover(
function(){$(this).prev('span').show();},
function(){$(this).prev('span').hide();});
});
function redrawDotNav(){
var section1Top =  0;
var section2Top =  $('#how').offset().top - (($('#whatis').offset().top - $('#how').offset().top) / 2);
var section3Top =  $('#whatis').offset().top - (($('#prod').offset().top - $('#whatis').offset().top) / 2);
var section4Top =  $('#prod').offset().top - (($('#sotrud').offset().top - $('#prod').offset().top) / 2);
var section5Top =  $('#sotrud').offset().top - (($(document).height() - $('#sotrud').offset().top) / 2);
$('#side a').removeClass('actv_b');
if($(document).scrollTop() >= section1Top && $(document).scrollTop() < section2Top){
$('#side a.n_1').addClass('actv_b');
} else if ($(document).scrollTop() >= section2Top && $(document).scrollTop() < section3Top){
$('#side .n_2').addClass('actv_b');
} else if ($(document).scrollTop() >= section3Top && $(document).scrollTop() < section4Top){
$('#side .n_3').addClass('actv_b');
} else if ($(document).scrollTop() >= section4Top && $(document).scrollTop() < section5Top){
$('#side .n_4').addClass('actv_b');
} else if ($(document).scrollTop() >= section5Top){
$('#side .n_5').addClass('actv_b');
}	
}