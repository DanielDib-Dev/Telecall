<?php
include_once 'Conexao.php';

if(isset($_GET['id'])) {
    $idUsuario = $_GET['id'];
    $query = "DELETE FROM usuario WHERE idUsuario = $idUsuario";
    mysqli_query($conn, $query);

    // Redirecionar de volta para a página principal após a exclusão
    header("Location: ../ConsultaUsuario.php");
    exit();
} else {
    header("Location: ../erro.php");
}
?>
