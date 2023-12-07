<?php
require_once "conexao.php";
$conecta = conectar();
session_start();
if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];
    $sql = "DELETE FROM usuario WHERE id_usuario = $id";
    $resultado = mysqli_query($conecta, $sql);
    if($resultado == TRUE){
        include_once("logout.php");
    } else {
        echo mysqli_error($conecta);
    }
}
?>
