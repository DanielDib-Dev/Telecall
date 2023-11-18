<?php
require 'Conexao.php';

session_start(); // Inicie a sessão no início do script
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_SESSION['usuario2FA'];
        $nome = $_SESSION['nome2FA'];
        $dataNasc = $_SESSION['dataNasc2FA'];
        $genero = $_SESSION['genero2FA'];
        $nomeM = $_SESSION['nomeM2FA'];
        $tel = $_SESSION['tel2FA'];
        $cel = $_SESSION['cel2FA'];
        $endereco = $_SESSION['endereco2FA'];
        $perfil = $_SESSION['perfil2FA'];
        if (isset($_POST['nomeM'])) {
                $nomeM = $_POST['nomeM'];
                $query = "SELECT * FROM usuario WHERE nomeM = '$nomeM' AND usuario = '$usuario'";
        }elseif (isset($_POST['endereco'])) {
                $endereco = $_POST['endereco'];
                $query = "SELECT * FROM usuario WHERE endereco = '$endereco' AND usuario = '$usuario'";
        }elseif (isset($_POST['dataNasc'])) {
                $dataNasc = $_POST['dataNasc'];
                $query = "SELECT * FROM usuario WHERE dataNasc = '$dataNasc' AND usuario = '$usuario'";
        }
        $result = $conn->query($query);

        if ($result->num_rows <= 0){
                header("Location: ../Login.php?success=false");
        }else{
                $_SESSION['usuario'] = $usuario;
                $_SESSION['nome'] = $nome;
                $_SESSION['dataNasc'] = $dataNasc;
                $_SESSION['genero'] = $genero;
                $_SESSION['nomeM'] = $nomeM;
                $_SESSION['tel'] = $tel;
                $_SESSION['cel'] = $cel;
                $_SESSION['endereco'] = $endereco;
                $_SESSION['perfil'] = $perfil;
                $_SESSION['logado'] = TRUE;
                $chavesParaRemover = array(
                        'usuario2FA',
                        'nome2FA',
                        'dataNasc2FA',
                        'genero2FA',
                        'nomeM2FA',
                        'tel2FA',
                        'cel2FA',
                        'endereco2FA',
                        'perfil2FA'
                    );
                    
                    foreach ($chavesParaRemover as $chave) {
                        unset($_SESSION[$chave]);
                    }
                header("Location: ../Login.php?success=true");

        }
}