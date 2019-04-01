
$('#DropdownCliente').click(function (eve) {
    $('#idEntidades').val($('#DropdownCliente option:selected').val());
    $('#idUsuarios').val($('#dropdownlista2 option:selected').val());
    $('#txtCliente').val($('#DropdownCliente option:selected').text());
    $('#txtComercialAsignado').val($('#dropdownlista2 option:selected').text());

});
$('#dropdownlista2').click(function (eve) {
    $('#idUsuarios').val($('#dropdownlista2 option:selected').val());
    $('#idEntidades').val($('#DropdownCliente option:selected').val());
    $('#txtCliente').val($('#DropdownCliente option:selected').text());
    $('#txtComercialAsignado').val($('#dropdownlista2 option:selected').text());

});
$('#btnGuardar').click(function (eve) {
    $('#idUsuarios').val($('#dropdownlista2 option:selected').val());
    $('#idEntidades').val($('#DropdownCliente option:selected').val());
    $('#txtCliente').val($('#DropdownCliente option:selected').text());
    $('#txtComercialAsignado').val($('#dropdownlista2 option:selected').text());
    $('#txtContactoEntidadx').val($('#IdContactoEntidad option:selected').text());
    $('#txtContactoAsociado').val($('#IdContactosAsociados option:selected').text());


});


$('#DropdownClienteAsociado').click(function (eve) {
    $('#idUsuarios').val($('#dropdownlista2 option:selected').val());
    $('#txtClienteAsociado').val($('#DropdownClienteAsociado option:selected').text());
    $('#txtComercialAsignado').val($('#dropdownlista2 option:selected').text());

});

$('#IdContactosAsociados').click(function (eve) {
    $('#txtContactoAsociado').val($('#IdContactosAsociados option:selected').text());


});

$('#IdContactoEntidad').click(function (eve) {
    $('#txtContactoEntidadx').val($('#IdContactoEntidad option:selected').text());


});
