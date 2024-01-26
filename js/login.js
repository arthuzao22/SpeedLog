$('#loginCliente').click(function () {
    id = $('#emailCliente').val();
    senha = $('#senhaCliente').val();
    $.post("http://localhost/Speedlog/App/verificar", {
        id: id,
        senha: senha,
    }, function (result) {
        if (result) {
            location.assign(result);
        } else {
            $("#modal").click();
        }
    });
})

//LOGIN MOTOBOY
$('#loginMotoboy').click(function () {
    email_m = $('#email_m').val();
    senha_m = $('#senha_m').val();
    $.post("http://localhost/Speedlog/App/verificar_motoboy", {
        email_m: email_m,
        senha_m: senha_m,
    }, function (result) {
        if (result) {
            location.assign(result);
        } else {
            $("#modal").click();
        }
    });
})

//LOGIN ADM
$('#loginAdmin').click(function () {
    email_adm = $('#emailAdmin').val();
    senha_adm = $('#senhaAdmin').val();
    $.post("http://localhost/Speedlog/App/verificarAdmin", {
        email_adm: email_adm,
        senha_adm: senha_adm,
    }, function (result) {
        if (result) {
            // alert(result);
            location.assign(result);
        } else {
            $("#modal").click();
        }
    });
})