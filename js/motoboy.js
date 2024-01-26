var local = 'http://localhost/Speedlog/App/';
if (location.href == local + 'motoboys') {
    $('#meusPedidos').css('display', 'block');
    $('#todosPedidos').css('display', 'none');
}
if (location.href == local + 'motoboysM') {
    $('#meusPedidos').css('display', 'none');
    $('#todosPedidos').css('display', 'block');
}
$('#meusPedidos').click(function () {
    location.assign(local + 'motoboysM');
});
$('#todosPedidos').click(function () {
    location.assign(local + 'motoboys');
});

var nodeList = document.querySelectorAll('button.button');

for (let i = 0; i < nodeList.length; i++) {
    if (nodeList[i].value == 'Agendada') {
        nodeList[i].style.backgroundColor = "#ef7e1e";
    }
    if (nodeList[i].value == 'Em andamento') {
        nodeList[i].style.backgroundColor = "gray";
    }
    if (nodeList[i].value == 'Finalizada') {
        nodeList[i].style.backgroundColor = "green";
    }
}
