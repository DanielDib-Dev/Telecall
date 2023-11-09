<?php
require 'Conexao.php';

session_start(); // Inicie a sessão no início do script
$_SESSION['logado'] = FALSE;
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = 'Área do cliente';
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = hash("SHA256", $_POST['senha']);
    $perfil = $_POST['perfil'];

    $query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' AND perfil = '$perfil'";
    $result = $conn->query($query);

    if ($result->num_rows <= 0){
        header("Location: ../Login.php?success=false");
      }else{
        $row = $result->fetch_assoc();
        // Armazenar informações do usuário na sessão
        $_SESSION['usuario'] = $row['usuario'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['dataNasc'] = $row['dataNasc'];
        $_SESSION['genero'] = $row['genero'];
        $_SESSION['nomeM'] = $row['nomeM'];
        $_SESSION['tel'] = $row['tel'];
        $_SESSION['cel'] = $row['cel'];
        $_SESSION['endereco'] = $row['endereco'];
        $_SESSION['perfil'] = $row['perfil'];
        $_SESSION['logado'] = TRUE;
        header("Location: ../Login.php?success=true");
    }

    $conn->close();
}
?>    