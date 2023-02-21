<!DOCTYPE html>
<!--
NOME: Lucas da Silva Barbosa
MATRICULA: 202120194

Crie uma página que contenha um formulário de inserção dos dados de um funcionário, são eles: nome, cargo, salário bruto e desconto do INSS.
Crie também a página (PHP) que contém o SQL de inserção dos dados deste funcionário, lembrando que teremos também o salário líquido, que deve ser calculado subtraindo-se o desconto do INSS do salário bruto.
O salário líquido deve ser calculado antes de ser inserido no banco de dados.
O código em PHP deverá conter um comentário com seu nome e matrícula
Criar o banco de dados e a tabela para armazenar essas informações. X
Criar o formulário X
Capturar os dados do formulário X
Persistir os dados na tabela criada X
Enviar o script de criação do banco de dados.sql e o código em PHP em um único arquivo zipado (.zip ou .rar)
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <label for="nome">Nome</label><input type="text" name="nome" id="nome"><br>
            <label for="cargo">Cargo</label><input type="text" name="cargo" id="cargo"><br>
            <label for="salarioBruto">Salário Bruto</label><input type="number" name="salarioBruto" id="salarioBruto"><br>
            <label for="descontoINSS">Desconto INSS</label><input type="text" name="descontoINSS" id="descontoINSS"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não inserido";// Dados do funcionário
            $cargo = isset($_GET["cargo"])?$_GET["cargo"]:"Cargo não inserido";
            $salarioBruto = isset($_GET["salarioBruto"])?$_GET["salarioBruto"]:0;
            $descontoINSS = isset($_GET["descontoINSS"])?$_GET["descontoINSS"]:0;
            $salarioLiquido = $salarioBruto-$descontoINSS;//Salario Liquido é campo calculado. Se quiser passar para 3FN, é bom tirar
            
            $nome_servidor = "localhost";//Criar conexão com o banco de dados
            $nome_usuario = "root";
            $senha = "";
            $nome_banco = "bancoaula9php";
            $conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
            
            if($salarioBruto != 0){
                $sql = "INSERT INTO funcionario (nome, cargo, salarioBruto, descontoINSS, salarioLiquido)
                VALUES ('".$nome."', '".$cargo."', '".$salarioBruto."','".$descontoINSS."','".$salarioLiquido."')";
                if ($conecta->query($sql) === TRUE) {
                    echo "Novo registro criado com sucesso";
                } else {
                    echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
            }}
            $conecta->close();
            
        ?>
    </body>
</html>
