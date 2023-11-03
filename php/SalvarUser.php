<?php
require 'Conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $Usuario = $_POST['Usuario'];
    $Nome = $_POST['Nome'];
    $CPF = $_POST['CPF'];
    $DataNasc = $_POST['DataNasc'];
    $Genero = $_POST['Genero'];
    $NomeM = $_POST['NomeM'];
    $Tel = $_POST['Tel'];
    $Cel = $_POST['Cel'];
    $Endereco = $_POST['Endereco'];
    $Senha = $_POST['Senha'];
    $Perfil = $_POST['Perfil'];

    $sql = "INSERT INTO usuario (Usuario, Nome, CPF, DataNasc, Genero, NomeM, Tel, Cel, Endereco, Senha, Perfil) VALUES ('$Usuario', '$Nome', '$CPF', '$DataNasc', '$Genero', '$NomeM', '$Tel', '$Cel', '$Endereco', '$Senha', $Perfil)";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../cadastro.html?success=true");
        exit(); // Certifique-se de sair para evitar que o código seja executado posteriormente
    } else {
        echo "Erro ao salvar o registro: " . $conn->error;
    }
    
    
    $conn->close();
}
?>    