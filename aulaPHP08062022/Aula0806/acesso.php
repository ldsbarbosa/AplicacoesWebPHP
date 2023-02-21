<!DOCTYPE html> 
<html> 
 <head> 
 <meta charset="UTF-8"> 
 <?php 
    session_start();//Inicia uma nova sessão ou resume uma sessão existente
    $logado = $_SESSION['login'];
    $nomeUsuario = $_SESSION['nome'];
    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
        session_unset();//remove todas as variáveis de sessão
        echo "
            <script>
                alert('Esta página só pode ser acessada por usuário logado. Você não está autenticado'); 
                window.location.href = 'index.html'; 
            </script>";
    }else{
        echo "<h1>Bem vindo, $nomeUsuario!</h1>";
    }
?>
 </head> 
 <body> 
 <div>Somente usuário logado</div>
 <a href="logout.php"><button>Logout</button></a>
 </body> 
</html> 