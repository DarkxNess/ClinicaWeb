jQuery(document).ready(function($) {
    $('#listarUsuarios').DataTable();
});

jQuery(document).ready(function($) {
    $('#pacientes').DataTable();
});

jQuery(document).ready(function($) {
    $('#fichas').DataTable();
});
jQuery(document).ready(function($) {
$('#imagen1').on('click',function(){
    $('.modal-body').load('modalDoctorx.php',function(){
        $('modalDoctor').modal({show:true});
    });
});
 });
function myFunction() {
  var x = document.getElementById("myTopnav");
  var c = document.getElementById("bannerCarousel");
  if (x.className === "topnav") {
    x.className += " responsive";
    c.style.padding = "0px 0px 0px 0px";
  } else {
    x.className = "topnav";
    c.style.padding = "35px 0px 0px 0px";

  }
}