// Comentário em uma linha.
/* 
Comentário em duas linhas
*/

document.write("Utilizando a função document.write()!!");

function verificaNome(){
    var nome,resposta;
    nome = document.getElementById("nome").value;
    resposta = document.getElementById("resposta");
    if(nome){
        alert("Nome: "+nome+" informado com sucesso! Utilizando alert");
        resposta.innerHTML="<h2>Nome: "+nome+" informado com sucesso! Utilizando innerHTML</h2>";
        //document.write("Nome: "+nome+" informado com sucesso!");
    }else {
        alert("Nome não informado");
    }
}