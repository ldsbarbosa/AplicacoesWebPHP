function mudaCor(){
    var cor = document.getElementById("corFundo").value;
    document.body.style.backgroundColor = cor;
}
function mudaImagem(){
    var imagemLink = document.getElementById("imagemAbaixo").value;
    document.getElementById("imagemAlterada").src = imagemLink;
}
function limpar(){
    document.getElementById("imagemAbaixo").value = "";
    document.getElementById("corFundo").value = "";
}