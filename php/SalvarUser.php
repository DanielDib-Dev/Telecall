<?php
require 'Conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $dataNasc = $_POST['dataNasc'];
    $genero = $_POST['genero'];
    $nomeM = $_POST['nomeM'];
    $tel = $_POST['tel'];
    $cel = $_POST['cel'];
    $endereco = $_POST['endereco'];
    $senha = hash("SHA256", $_POST['senha']);
    $perfil = $_POST['perfil'];

    $sql = "INSERT INTO usuario (usuario, nome, cpf, dataNasc, genero, nomeM, tel, cel, endereco, senha, perfil) VALUES ('$usuario', '$nome', '$cpf', '$dataNasc', '$genero', '$nomeM', '$tel', '$cel', '$endereco', '$senha', $perfil)";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../cadastro.php?success=true");
        exit(); // Certifique-se de sair para evitar que o código seja executado posteriormente
    } else {
        echo "Erro ao salvar o registro: " . $conn->error;
    }
    
    
    $conn->close();
}
?>    