<?php
require_once "conexao.php";
$conecta = conectar();
session_start();
if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];
    $sql_pesquisa = "SELECT arquivo FROM documento WHERE id_documento = $id";
    $dados = mysqli_query($conecta, $sql_pesquisa);
    $info = mysqli_fetch_assoc($dados);
    unlink($info);
    $sql = "DELETE FROM documento WHERE id_documento = $id";
    $resultado = mysqli_query($conecta, $sql);

    header("Location: lista_doc.php");
}
?>