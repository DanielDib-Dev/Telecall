<?php
require 'Conexao.php';

session_start(); // Inicie a sessão no início do script
$_SESSION['Logado'] = FALSE;
if (!isset($_SESSION['Usuario'])) {
    $_SESSION['Usuario'] = 'Área do cliente';
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Usuario = $_POST['Usuario'];
    $Senha = $_POST['Senha'];
    $Perfil = $_POST['Perfil'];

    $query = "SELECT * FROM usuario WHERE Usuario = '$Usuario' AND Senha = '$Senha'";
    $result = $conn->query($query);

    if ($result->num_rows <= 0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        // Armazenar informações do usuário na sessão
        $_SESSION['Usuario'] = $Usuario;
        $_SESSION['Perfil'] = $Perfil;
        $_SESSION['Logado'] = TRUE;
        header("Location: ../index.php");
    }

    $conn->close();
}
?>    