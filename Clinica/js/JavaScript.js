jQuery(document).ready(function($) {
    $('#listarUsuarios').DataTable();
});
jQuery(document).ready(function($) {
    $('#listarNoticias').DataTable();
});

jQuery(document).ready(function($) {
    $('#pacientes').DataTable();
});

jQuery(document).ready(function($) {
    $('#fichas').DataTable();
});
jQuery(document).ready(function($) {
$('#imagenDoctor1').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor1.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor2').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor2.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor3').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor3.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor4').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor4.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor5').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor5.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor6').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor6.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor7').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor7.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor8').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor8.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor9').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor9.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
jQuery(document).ready(function($) {
$('#imagenDoctor10').on('click',function(){
    $('.modal-body').load('js/modales/modalDoctor10.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
function myFunction() {
  var x = document.getElementById("myTopnav");
  var c = document.getElementById("bannerCarousel");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";

  }
}
