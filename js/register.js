$(document).ready(function () {
    $('input[name=cpf]').mask('000.000.000-00');
    $('input[name=telefone]').mask('(00) 00000-0000');
})

//Formulário Clientes
$('#formulario1').submit(function (e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    // var actionUrl = form.attr('action');
    $.ajax({
        type: "POST",
        url: 'http://localhost/Speedlog/App/inserir',
        data: form.serialize(), // serializes the form's elements.
        success: function (data) {
            if (data == 1) {
                $('#errorModal').modal('show');
            }
            if (data == 2) {
                $('#exampleModal').modal('show');
            }
        }
    });
})
//Formulário Motoboy
$("#formulario2").submit(function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: 'http://localhost/Speedlog/App/inserir_motoboy',
        type: 'POST',
        data: formData,
        success: function (data) {
            if (data == 1) {
                $('#errorModal').modal('show');
            }
            if (data == 2) {
                $('#exampleModal').modal('show');
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});

//Quando fechar o modal mudar de pagina
$('#exampleModal').on('hidden.bs.modal', function () {
    location.assign('http://localhost/Speedlog/App/login')
})

$(document).ready(function () {
    $('input[name=cpf_m]').mask('000.000.000-00');
    $('input[name=placa_m]').mask('AAA-9999');
    $('input[name=telefone_m]').mask('(00) 00000-0000');
})