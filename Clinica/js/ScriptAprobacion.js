$("#btnModificarAprobacion").click(function (eve) {
    $("#ModificarAprobacion-Body").load("/PedidoEnsayo/EditarAprobacion/" + $(this).data("id"));
});

$("#btnModificarAprobacion1").click(function (eve) {
    $("#ModificarAprobacion1-Body").load("/PedidoEnsayo/EditarAprobacion2/" + $(this).data("id"));
});

$("#btnModificarAprobacion2").click(function (eve) {
    $("#ModificarAprobacion2-Body").load("/PedidoEnsayo/EditarAprobacion3/" + $(this).data("id"));
});
$("#btnEditarMuestra").click(function (eve) {
    $("#ModificarMuestra-Body").load("/PedidoEnsayo/EditarMuestra/" + $(this).data("id"));
});
