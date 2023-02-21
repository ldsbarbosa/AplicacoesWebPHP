alert(validaCPF(window.prompt()));

function validaCPF(cpf){
    if(cpf.length == 11){
        var cpfCurto = cpf.substring(0,9);
        cpfCurto += geraDigito10(cpfCurto);
        cpfCurto += geraDigito11(cpfCurto);
        if(cpf==cpfCurto){
            return "CPF válido"
        }
    }
    
    return "CPF inválido!";
}

function geraDigito10(cpf){
    var soma=0, valor=10, resto;
    for(var i=0;i<9;i++){
        soma += cpf.charAt(i) * valor;
        valor--;
    }
    resto = soma%11;
    if(resto<2){
        return 0;
    } else {
        return 11-resto;
    }
}
function geraDigito11(cpf){
    var soma=0, valor=11, resto;
    for(var i=0;i<10;i++){
        soma += cpf.charAt(i) * valor;
        valor--;
    }
    resto = soma%11;
    if(resto<2){
        return 0;
    } else {
        return 11-resto;
    }
}