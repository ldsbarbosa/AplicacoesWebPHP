<?php 
 session_start();//Inicia uma nova sessão ou resume uma sessão existente
 
 $login=$_POST['login']; // obtém o login digitado
 $nome = $_POST['nome']; // obtém o nome digitado
 $senha=$_POST['senha']; // obtém a senha digitada
 
 //dados de acesso ao banco 
 $local="localhost"; 
 $usuario_BD="root"; 
 $senha_BD=""; 
 $base="aula08062022Renan"; 
 
 //conexão ao banco 
 $tenta_conectar = new mysqli($local,$usuario_BD,$senha_BD,$base); 
 if($tenta_conectar->connect_error === TRUE) 
 { die("Deu erro na conexão ". $tenta_conectar->connect_error);} 
 
 //verificação de login e senha estão corretos 
 $tenta_achar = "SELECT * FROM usuarios WHERE loginNome='$login' AND loginSenha='$senha'" ; 
 $resultado = $tenta_conectar->query($tenta_achar); 
 if ($resultado->num_rows > 0) { 
    $_SESSION['login'] = $login;
    $_SESSION['nome'] = $nome; 
    $_SESSION['senha'] = $senha; 
    header('location:acesso.php');//redireciona para a página de acesso
 } 
 else{ 
    session_unset();//remove todas as variáveis de sessão
    session_destroy();//destroi a sessão
    echo "<script> 
        alert('Login ou senha incorreto. O login não foi autenticado.'); 
        window.location.href = 'index.html'; 
    </script>"; 
 } 
?> 