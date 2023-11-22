<?php
require 'Conexao.php';

session_start(); // Inicie a sessão no início do script
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_SESSION['usuario2FA'];
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
                //header("Location: ../Login.php?success=false");
                var_dump($result);
        }else{
                $_SESSION['usuario'] = $_SESSION['usuario2FA'];
                $_SESSION['nome'] = $_SESSION['nome2FA'];
                $_SESSION['dataNasc'] = $_SESSION['dataNasc2FA'];
                $_SESSION['genero'] = $_SESSION['genero2FA'];
                $_SESSION['nomeM'] = $_SESSION['nomeM2FA'];
                $_SESSION['tel'] = $_SESSION['tel2FA'];
                $_SESSION['cel'] = $_SESSION['cel2FA'];
                $_SESSION['endereco'] = $_SESSION['endereco2FA'];
                $_SESSION['perfil'] = $_SESSION['perfil2FA'];
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