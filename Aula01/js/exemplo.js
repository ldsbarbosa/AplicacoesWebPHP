alert("Bem-vindo!");

function exibeValor(){
    var v1,v2,soma;
    v1 = document.getElementById("v1").value;
    v2 = document.getElementById("v2").value;
    soma = parseInt(v1,10)+parseInt(v2,10);
    if(!isNaN(soma)){
        alert(soma);
    } else {
        alert("Informe um número"); 
    }
}