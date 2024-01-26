$('#solicitarServico').click(function () {
    $('#Modal').modal('show');
})

//Máscara CPF Origem e Destino
$(document).ready(function () {
    $('input[name=cepo]').mask('00000-000');
    $('input[name=cepd]').mask('00000-000');
    var cepOrigem, cepDestino, pesoMercadoria, valueT, valueD, log_origem, log_destino, bairro_origem, bairro_destino;
    $('#calcFrete').click(function () {
        //Obtendo valores e armazenando na variavel
        // Limite CEP Juiz de Fora: 36000-001 a 36107-999
        cepOrigem = $('#cepo').val();
        cepDestino = $('#cepd').val();
        pesoMercadoria = $('#pesom').val();
        if (cepOrigem >= '36000-001' && cepOrigem <= '36107-999' && cepDestino >= '36000-001' && cepDestino <= '36107-999' && pesoMercadoria > 0 && pesoMercadoria <= 12) {
            valueT;
            valueD;
            $.get("https://api.distancematrix.ai/maps/api/distancematrix/json?origins=" + cepOrigem + "&destinations=" + cepDestino + "&key=ASW3Y5rykU3qJONKjMJtbEprjlsoa", function (data) {
                console.log(data);
                // //Distância
                $('#distancia').val(data['rows'][0]['elements'][0]['distance']['text']);
                $('#valorD').val(data['rows'][0]['elements'][0]['distance']['value']);
                //Tempo
                $('#tempo').val(data['rows'][0]['elements'][0]['duration']['text']);
                $('#valorT').val(data['rows'][0]['elements'][0]['duration']['value']);
                //Exibindo os input com resultado recuperado da função
                $('#divDistancia').show();
                $('#divTempo').show();
                //Armazenando os valores para ser enviado no ajax
                valueT = data['rows'][0]['elements'][0]['duration']['value'];
                valueD = data['rows'][0]['elements'][0]['distance']['value'];
                $.post("http://localhost/Speedlog/App/calcularFrete/", {
                    p: pesoMercadoria,
                    t: valueT,
                    d: valueD
                }, function (result) {
                    // alert(result);
                    $('#frete').val('R$ ' + result);
                    $('#valorF').val(result);
                    $('#divFrete').show();
                });

                $.get("https://viacep.com.br/ws/" + cepOrigem + "/json/?data=?", function (data) {
                    bairro_origem = data['bairro'];
                    log_origem = data['logradouro'];
                    $('#enderecoo').val(log_origem + ' - Bairro ' + bairro_origem);
                    $('#divEnderecoo').show();
                })
                $.get("https://viacep.com.br/ws/" + cepDestino + "/json/?data=?", function (data) {
                    bairro_destino = data['bairro'];
                    log_destino = data['logradouro'];
                    $('#enderecod').val(log_destino + ' - Bairro ' + bairro_destino);
                    $('#divEnderecod').show();
                })
                $('#divNumd').show();
            });
        }
        else {
            $('#Modal').modal('hide'); 
            $('#infoCep').modal('show');
        }
    })
    $('#infoCep').on('hidden.bs.modal', function () {
        $('#Modal').modal('show');
    })
    $('#finalizar').click(function () {
        cepOrigem = $('#cepo').val();
        cepDestino = $('#cepd').val();
        var p = $('#pesom').val();
        var d = $('#valorD').val();
        var t = $('#valorT').val();
        var id = $('#idCliente').val();
        var f = $('#valorF').val();
        var cepo = $('#cepo').val();
        var cepd = $('#cepd').val();
        $.post("http://localhost/Speedlog/App/salvarParametro/", {
            p: p,
            d: d,
            t: t,
            id: id,
            f: f,
            cepo: cepo,
            cepd: cepd,
            lo: log_origem,
            ld: log_destino,
            bo: bairro_origem,
            bd: bairro_destino
        }, function (result) {
            location.reload();
        });
    })
})



var nodeList = document.querySelectorAll('button.button');

for (let i = 0; i < nodeList.length; i++) {
    if (nodeList[i].value == 'Agendada') {
        nodeList[i].style.backgroundColor = "#ef7e1e";
    }
    if (nodeList[i].value == 'Em andamento') {
        nodeList[i].style.backgroundColor = "333333";
    }
    if (nodeList[i].value == 'Finalizada') {
        nodeList[i].style.backgroundColor = "green";
    }
}

