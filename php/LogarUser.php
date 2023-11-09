<?php
require 'Conexao.php';

session_start(); // Inicie a sessão no início do script
$_SESSION['Logado'] = FALSE;
if (!isset($_SESSION['Usuario'])) {
    $_SESSION['Usuario'] = 'Área do cliente';
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Usuario = $_POST['Usuario'];
    $Senha = hash("SHA256", $_POST['Senha']);
    $Perfil = $_POST['Perfil'];

    $query = "SELECT * FROM usuario WHERE Usuario = '$Usuario' AND Senha = '$Senha' AND Perfil = '$Perfil'";
    $result = $conn->query($query);

    if ($result->num_rows <= 0){
        header("Location: ../Login.php?success=false");
      }else{
        // Armazenar informações do usuário na sessão
        $_SESSION['Usuario'] = $Usuario;
        $_SESSION['Perfil'] = $Perfil;
        $_SESSION['Logado'] = TRUE;
        header("Location: ../Login.php?success=true");
    }

    $conn->close();
}
?>    