var nodeList = document.querySelectorAll('#sts');
for (let i = 0; i < nodeList.length; i++) {
    if (nodeList[i].innerHTML == 'Agendada') {
        nodeList[i].style.color = "#ef7e1e";
    }
    if (nodeList[i].innerHTML == 'Em andamento') {
        nodeList[i].style.color = "333333";
    }
    if (nodeList[i].innerHTML == 'Finalizada') {
        nodeList[i].style.color = "green";
    }
}