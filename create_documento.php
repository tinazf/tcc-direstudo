<?php
require_once "conexao.php";
$conecta = conectar();
session_start();
if (isset($_POST['btn-cadastrar'])){
	$id_usuario = $_SESSION['id_usuario'];
    $titulo= $_POST ['titulo'];
	$autor= $_POST ['autor'];
    $categoria= $_POST ['categoria'];
	$descricao= $_POST ['descricao'];
    $arquivo= $_FILES ['arquivo'];

	$name_arquivo = $arquivo['name'];
	$tmp_name_arquivo = $arquivo['tmp_name'];
	$diretorio = "arquivos/";

	$extension_arquivo = strtolower(pathinfo($name_arquivo, PATHINFO_EXTENSION));
	$newname_arv = uniqid() . '.' . $extension_arquivo;
	move_uploaded_file($tmp_name_arquivo, $diretorio . $newname_arv);
	$documento = $diretorio . $newname_arv;
   
	$sql = "INSERT INTO documento (id_usuario, titulo, categoria, autor, descricao, arquivo) 
    VALUES ('$id_usuario', '$titulo', '$categoria', '$autor', '$descricao', '$documento')";
	$resultado = mysqli_query($conecta, $sql);
	if ($resultado == true) {
        echo "<script> alert ('Documento cadastrado com sucesso!'); </script>";
        echo " <script> location.href='lista_doc .php'; </script>";
    } else {
		echo mysqli_errno($conecta) . ": " . mysqli_error($conecta);
	}
} else if(isset($_POST['editar'])){

} else if(isset($_GET['btn-deletar'])){
	$id_documento = $_GET['btn-deletar'];
	$sql1 = "SELECT arquivo FROM documento WHERE id_documento = $id_documento";
	$result = mysqli_query($conecta, $sql1);
	$dados = mysqli_fetch_assoc($result);
	unlink($dados['arquivo']);
	$sql = "DELETE FROM documento WHERE id_documento = $id_documento";
	$resultado = mysqli_query($conecta, $sql);
	if($resultado == true){
		header("Location: index.php");
	} else {
		echo mysqli_errno($conecta) . ": " . mysqli_error($conecta);
	}
}
?>