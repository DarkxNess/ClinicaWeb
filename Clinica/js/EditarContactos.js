$("#btnNuevo").click(function (eve) {
    $("#modal-content").load("/Entidad/EditarContactos/" + $(this).data("id"));
});

$("#btnLugarEnsayos").click(function (eve) {
    $("#modal-content2").load("/Entidad/EditarLugarEnsayo/" + $(this).data("id"));
});

$("#plantillaPresupuesto").click(function (eve) {
    $(document).load("/Presupuesto/PlantillaPresupuesto/" + $(this).data("id"));
});

$("#btnCrearContacto").click(function (eve) {
    $("#CrearNuevoContacto-body").load("/Entidad/CrearContacto/" + $(this).data("id"));
});

$("#btnEditarProducto").click(function (eve) {
    $("#ModificarProducto-Body").load("/Presupuesto/EditarProductos/" + $(this).data("id"));
});

$("#btnCrearProducto").click(function (eve) {
    $("#CrearNuevoProducto-body").load("/Presupuesto/CrearProductos/" + $(this).data("id"));
});

$("#btnEditarCotizacion").click(function (eve) {
    $("#ModificarCotizacion-Body").load("/Presupuesto/EditarCotizacion/" + $(this).data("id"));
});

$("#btnCrearCotizacion").click(function (eve) {
    $("#CrearNuevaCotizacion-body").load("/Presupuesto/CrearCotizacion/" + $(this).data("id"));
});

$("#btnCrearMuestra").click(function (eve) {
    $("#CrearNuevaMuestra-body").load("/PedidoEnsayo/CrearMuestra/" + $(this).data("id"));
});

$("#btnEditarMuestra").click(function (eve) {
    $("#ModificarMuestra-Body").load("/PedidoEnsayo/EditarMuestra/" + $(this).data("id"));
});
