
jQuery(document).ready(function($) {
	$('#imagen1').on('click', function(){
    $('.modal-body').load('http://www.poesiasvisuales.cl/pruebagaleria/', function(){
        $('modalFelipeBurgos').modal({show:true});

    });
});
 });
