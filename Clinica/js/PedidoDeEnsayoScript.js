$("#btnModificarAprobacion").click(function (eve) {
    $("#ModificarAprobacion-Body").load("/PedidoEnsayo/EditarAprobacion/" + $(this).data("id"));
});
