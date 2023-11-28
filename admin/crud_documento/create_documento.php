<?php

require_once "../../conexao.php";
$conecta = conectar();

if (isset($_POST['btn-cadastrar'])){
	$categoria= $_POST ['categoria'];
	$descricao= $_POST ['descricao'];
	$autor= $_POST ['autor'];
	$nome= $_POST ['nome'];
   

	$sql = "INSERT INTO documentos (nome, categoria, autor, descricao) 
    VALUES ('$nome', '$categoria', '$autor','$descricao')";
	$resultado = mysqli_query($conecta, $sql);
}

   if (isset($_GET['btn-deletar'])){
	   $id_documento = $_GET['btn-deletar'];
	   $sql1 = "SELECT arquivo FROM documentos WHERE id_documento = $id_documento";
	   $result = mysqli_query($conecta, $sql1);
	   $dados = mysqli_fetch_assoc($result);
	   
	   unlink($dados['arquivo']);
	   
	   $sql = "DELETE FROM documentos WHERE id_documento = $id_documento";
	   $resultado = mysqli_query($conecta, $sql);
	   if($resultado == true){
		   header("Location: index_admin.php");
	   } else {
		   echo mysqli_errno($conecta) . ": " . mysqli_error($conecta);
	   }
   }

	

