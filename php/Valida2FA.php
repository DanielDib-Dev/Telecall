<?php
require 'Conexao.php';

session_start(); // Inicie a sessão no início do script
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nomeM'])) {
            $nomeM = $_POST['nomeM'];
            $query = "SELECT * FROM usuario WHERE usuario = '$usuario'";
    }elseif (isset($_POST['endereco'])) {
            $endereco = $_POST['endereco'];
            $query = "SELECT * FROM usuario WHERE usuario = '$usuario'";
    }elseif (isset($_POST['dataNasc'])) {
            $dataNasc = $_POST['dataNasc'];
            $query = "SELECT * FROM usuario WHERE usuario = '$usuario'";
    }
    $query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha' AND perfil = '$perfil'";
    $result = $conn->query($query);

    if ($result->num_rows <= 0){

    }
}