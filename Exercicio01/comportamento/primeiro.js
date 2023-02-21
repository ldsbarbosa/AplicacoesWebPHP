var primeiraImagem = true;

function mudaImagem(){
    var imagemAtual = document.getElementById("imagemMetamorfa");
    if(primeiraImagem){
        imagemAtual.innerHTML = `<img src="imagens/imagem_02.jpg" onclick="mudaImagem()"></img>`;
        primeiraImagem = false;
    }else{
        imagemAtual.innerHTML = `<img src="imagens/imagem_01.jpg" onclick="mudaImagem()"></img>`;
        primeiraImagem = true;
    }
}