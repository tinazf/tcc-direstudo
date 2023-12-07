<?php
require_once "conexao.php";
$conecta = conectar();
session_start();
if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];

    $sql = "DELETE FROM documento WHERE id_usuario = $id";
    mysqli_query($conecta, $sql);
    header("Location: lista_doc.php");
}
?>