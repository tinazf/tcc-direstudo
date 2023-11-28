<?php

require_once "../../conexao.php";
$conecta = conectar();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- conecta broostrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head> 
<body>
    <nav class="rounded shadow bg-light mt-3">
		<ul class="nav nav-pills nav-justified">
            <li class="nav-item"><a href="#" class="float-start"><img src="../../logo.png" style="width:100px;" alt="logo"></a></img></li>
			<li class="nav-item mt-5"><a href="crud_roupas/adicionar_roupa.php" class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;">Cadastrar nova peça</a></li>
            <li class="nav-item mt-5" ><a href="../crud_usuarios/adicionar_usuario.php""  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;" >Cadastrar novo uruário</a></li>
            <li class="nav-item mt-5" ><a href="../caixa.php"  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;" >Caixa de solicitações</a></li>
			<li class="nav-item mt-5"><button type="button"  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;"><a href="../../index.php" class="text-decoration-none" style="color: white ;" >Sair</a></button></li>
		</ul>
		
	</nav>
<!--Tela ADM cadastrando roupa -->
<div class="container mt-5">
	<div class="row justify-content-center">
	<div class="col-md-6">
		<h2>Cadastrar um documento</h2>
		<form action="create_documento.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="nome" class="form-label">Nome do documento</label>
				<input type="text" class="form-control" name="nome" id="nome" required>
			</div>

			<div class="mb-3">
				<label for="descricao" class="form-label">Descrição</label>
				<textarea class="form-control" rows="4" type="text" name="descricao" id="descricao" required></textarea>
				</div>
			
			<div class="mb-3">
				<label for="autor" class="form-label">Autor</label>
				<input type="text" class="form-control" name="autor" id="autor" required>
				</div>	
			<!--add caixa de seleçao-->
			<div class="mb-3">
  			<form method="GET" action="cad.categoria.php">
				<select name="categoria">
				<option value="livros">Livros</option>
				<option value="CE">Contratos empresáriais</option>
				<option value="DF">Direito da Familía</option>
				<option value="DT">Direito do trabalho</option>
				<option value="proc">Procuração</option>
				</select>
			</form>
			</div>

			<div class="row">   
                <div class="col-xl-12 pb-2">
                    <label class="form-label">Arquivo</label>
                    <input class="form-control" type="file" name="arquivo" required>
                </div>
            </div>
					<br>
					<div class= "form-group">
					<button type="submit" name="btn-cadastrar" class="btn w-30 mx-auto mb-3" style="background-color: #F7941D; color: #FFFFFF" href="../index.php">Enviar</button>
					<button type="submit" href="../../index.php" name="btn-cadastrar" class="btn w-30 mx-auto mb-3" style="background-color: #F7941D; color: #FFFFFF">Cancelar</button>
					</div>
	</div>
</div>

