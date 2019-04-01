$("#precioUnitario").keyup(function (eve) {
    var cantidadProductos = $("#cantidadProductos").val();
    var precioUnitario = $("#precioUnitario").val();
    var subTotal = (cantidadProductos * precioUnitario);
    var totalChilensi = (subTotal * 27.186);
    $("#subtotal").val(subTotal);
    $("#totalChile").val(totalChilensi);
});

$("#CrearCotizacion").click(function (eve) {
    var cantidadProductos = $("#cantidadProductos").val();
    var precioUnitario = $("#precioUnitario").val();
    var subTotal = (cantidadProductos * precioUnitario);
    var totalChilensi = (subTotal * 27.186);
    $("#subtotal").val(subTotal);
    $("#totalChile").val(totalChilensi);
});


$("#precioUnitario").focusout(function (eve) {
    var cantidadProductos = $("#cantidadProductos").val();
    var precioUnitario = $("#precioUnitario").val();
    var subTotal = (cantidadProductos * precioUnitario);
    var totalChilensi = (subTotal * 27.186);
    $("#subtotal").val(subTotal);
    $("#totalChile").val(totalChilensi);
});

$("#cantidadProductos").click(function (eve) {
    var cantidadProductos = $("#cantidadProductos").val();
    var precioUnitario = $("#precioUnitario").val();
    var subTotal = (cantidadProductos * precioUnitario);
    var totalChilensi = (subTotal * 27.186);
    $("#subtotal").val(subTotal);
    $("#totalChile").val(totalChilensi);
});

$("#cantidadProductos").keyup(function (eve) {
    var cantidadProductos = $("#cantidadProductos").val();
    var precioUnitario = $("#precioUnitario").val();
    var subTotal = (cantidadProductos * precioUnitario);
    var totalChilensi = (subTotal * 27.186);
    $("#subtotal").val(subTotal);
    $("#totalChile").val(totalChilensi);
});

$('#iddropdownlist').change(function (eve) {
    $('#precioUnitario').val($('#iddropdownlist option:selected').val());
    $('#NombreCotizacionx').val($('#iddropdownlist option:selected').text());
    var cantidadProductos = $("#cantidadProductos").val();
    var precioUnitario = $("#precioUnitario").val();
    var subTotal = (cantidadProductos * precioUnitario);
    var totalChilensi = (subTotal * 27.186);
    $("#subtotal").val(subTotal);
    $("#totalChile").val(totalChilensi);
});

$('#iddropdownlist').click(function (eve) {
    $('#precioUnitario').val($('#iddropdownlist option:selected').val());
    $('#NombreCotizacionx').val($('#iddropdownlist option:selected').text());
    var cantidadProductos = $("#cantidadProductos").val();
    var precioUnitario = $("#precioUnitario").val();
    var subTotal = (cantidadProductos * precioUnitario);
    var totalChilensi = (subTotal * 27.186);
    $("#subtotal").val(subTotal);
    $("#totalChile").val(totalChilensi);
});

$('#ModificarCotizacionx').click(function (eve) {
    $('#precioUnitario').val($('#iddropdownlist option:selected').val());
    $('#NombreCotizacionx').val($('#iddropdownlist option:selected').text());
    var cantidadProductos = $("#cantidadProductos").val();
    var precioUnitario = $("#precioUnitario").val();
    var subTotal = (cantidadProductos * precioUnitario);
    var totalChilensi = (subTotal * 27.186);
    $("#subtotal").val(subTotal);
    $("#totalChile").val(totalChilensi);
});
