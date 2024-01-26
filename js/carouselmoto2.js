function modal_alterar(idEntrega) {
    entrega_selecionada = idEntrega;
    var x = $('#frete' + idEntrega).val();
    var y = $('#' + idEntrega).val();
    document.getElementById('exibirFrete').innerText = "R$ " + (x * 0.7).toFixed(2);
    if (y == 'Em andamento') {
        $("#alterar_modal").modal('show');
    }
    if (y == 'Finalizada') {
        document.getElementById('freteRecebido').innerText = "R$ " + (x * 0.7).toFixed(2);
        $('#infoEntrega').modal('show');
    }
}
$("#alterar").click(function () {
    $.post("http://localhost/Speedlog/App/alterarAndamento", {
        idEntrega: entrega_selecionada,
    },
        function (result) {
            location.reload();
        });
});