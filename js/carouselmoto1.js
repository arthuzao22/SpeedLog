function modal_alterar(idEntrega) {
    entrega_selecionada = idEntrega;
    $("#alterar_modal").modal('show');
}
$("#alterar").click(function () {
    $.post("http://localhost/Speedlog/App/alterar", {
        idEntrega: entrega_selecionada,
    },
        function (result) {
            location.reload();
        });
});