<?php
require_once "../../conexao.php";
$conecta = conectar();
?>
<body>
    <nav class="rounded shadow bg-light mt-3">
		<ul class="nav nav-pills nav-justified">
            <li class="nav-item"><a href="#" class="float-start"><img src="../../logo.png" style="width:100px;" alt="logo"></a></img></li>
			<li class="nav-item mt-5"><a href="crud_roupas/adicionar_roupa.php" class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;">Cadastrar nova peça</a></li>
            <li class="nav-item mt-5" ><a href="../usuario/crud_usuarios/adicionar.php"  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;" >Cadastrar novo uruário</a></li>
            <li class="nav-item mt-5" ><a href="../caixa.php"  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;" >Caixa de solicitações</a></li>
			<li class="nav-item mt-5"><button type="button"  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;"><a href="../index.php" class="text-decoration-none" style="color: white ;" >Sair</a></button></li>
		</ul>
<?php
// Select

if ($_GET){
    $id_roupa = $_GET['id_roupa'];
    $sql = "SELECT * FROM roupa WHERE id_roupa = '$id_roupa'";
    $consulta = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_assoc($consulta);
}

if (isset($_POST['btn-editar'])){
    $id_roupa = $_POST['id_roupa'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $historia = $_POST['historia'];

    $sql = "SELECT (imagem) FROM roupa WHERE id_roupa = '$id_roupa'";
    $consulta = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_assoc($consulta);
    unlink($dados['imagem']);

    $imagem = $_FILES['imagem'];
    $name_imagem = $imagem['name'];
    $tmp_name_imagem = $imagem['tmp_name'];
    $diretorio = "foto_roupa/";

    $extension_imagem = strtolower(pathinfo($name_imagem, PATHINFO_EXTENSION));
    $newname_img = uniqid() . '.' . $extension_imagem;
    move_uploaded_file($tmp_name_imagem, $diretorio . $newname_img);
    $foto = $diretorio . $newname_img;
    
    $sql = "UPDATE roupa SET nome='$nome', descricao='$descricao', historia='$historia', imagem='$foto' WHERE id_roupa = '$id_roupa'";
    $resultado = mysqli_query($connect, $sql);
    if($resultado == true){
        header("Location: ../index_admin.php");
    } else {
        echo mysqli_errno($connect) . ": " . mysqli_error($connect);
    }

}
?>

<!--Tela ADM editando uma roupa -->
<div class="container mt-5">
	<div class="row justify-content-center">
	<div class="col-md-6">
		<h2>Editar uma peça</h2>
		<form action="php_action/create_roupa.php" method="POST" enctype="multipart/form-data">
			
            <div class="mb-3">
				<label for="nome" class="form-label">Nome da peça</label>
                <input type="text" class="form-control" name="nome" value=" <?php echo $dados['nome']; ?>" id="nome" required>
			</div>

			<div class="mb-3">
				<label for="descricao" class="form-label">Descrição</label>
				<input type="text" class="form-control" name="descricao" value=" <?php echo $dados['descricao']; ?>" id="descricao" required>
				</div>

			<div class="mb-3">
  			<label for="historia" class="form-label" >História</label>
  			<textarea class="form-control" rows="4" type="text" name="historia"  value=" <?php echo $dados['historia']; ?>" id="historia" required></textarea>
			</div>

			<div class="row">   
                <div class="col-xl-12 pb-2">
                    <label class="form-label">Imagem</label>
					<img class="img-rounded" src= "foto_roupa/<?php echo $dados['imagem']; ?>" alt="Card image" style="width:20%">
					<input class="form-control" type="file" name="imagem" required>
                </div>
            </div>
					<br>
					<button type="submit" name="btn-editar" class="btn w-30 mx-auto mb-3" style="background-color: #F7941D; color: #FFFFFF">Atualizar</button>
					<button type="submit" href="../index_admin.php" class="btn w-30 mx-auto mb-3" style="background-color: #F7941D; color: #FFFFFF">Cancelar</button>


	</div>
</div>



