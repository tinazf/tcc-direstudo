<?php
require_once "conexao.php";
$conecta = conectar();
session_start();
if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];

    $sql = "DELETE FROM usuario WHERE id_usuario = $id";
    mysqli_query($conecta, $sql);
    include_once("logout.php");
}
?>
