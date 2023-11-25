<?php
require 'Conexao.php';

session_start(); // Inicie a sessão no início do script

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_SESSION['usuario'];
    $senhaNova = hash("SHA256", $_POST['senha']);
    $query = "UPDATE `projeto`.`usuario` SET `senha` = '$senhaNova' WHERE usuario = '$usuario'";
    if ($conn->query($query) === TRUE) {
        // Redireciona apenas se a consulta for bem-sucedida
        header("Location: ../AlteraSenha.php?success=true");
        exit(); // Certifique-se de sair para interromper a execução do script
    } else {
        echo "Erro na atualização da senha: " . $conn->error;
    }
}

$conn->close();
?>    