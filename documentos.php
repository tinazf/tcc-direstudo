<?php
require_once "conexao.php";
$conecta = conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles/style.css" rel="stylesheet" />
    <title>Documentos | Biblioteca Jurídica </title>
<body>
<nav class="navbar navbar-expand-lg navbar-warning bg-warning">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex line-weight-base ">
        <input class="form-control me-2" type="search" placeholder="pesquisar" aria-label="Search">
        <button  class="bg-success text-white border-warning rounded" name="pesquisa" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<br><br>
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
				<label for="autor" class="form-label">Autor</label>
				<input type="text" class="form-control" name="autor" id="autor" required>
				</div>	
    <div class="form-group col-mb-3">
      <label for="categoria">Categoria</label>
      <select id="categoria" class="form-control">
        <option selected>Selecione uma categoria</option>
        <select>Contrato Empresárial</select>
        <select>Direito Constitucional </select>
        <select>Direito Civil </select>
        <select>Direito Administrativo </select>
        <select>Direito Penal </select>
        <select>Direito Do Trabalho </select>
        <select>Ética Profissional</select>
        <select>Estatuto OAB </select>
        <select>Estatuto Da Criança e Adolescente</select>
        <select>Processo</select>
        <select>Processo Civil</select>
        <select>Processo Trabalho</select>
        <select>Processo Penal</select>
        <select>Processo Empresarial</select>
    </select>
  </div>
  <div class="mb-3">
				<label for="descricao" class="form-label">Descrição</label>
				<textarea class="form-control" rows="4" type="text" name="descricao" id="descricao" required></textarea>
				</div>
			
			<div class="row">   
                <div class="col-xl-12 pb-2">
                    <label class="form-label">Arquivo</label>
                    <input class="form-control" type="file" name="arquivo" required>
                </div>
            </div>
					<br>
          <div class= "button">
					  <button type="submit" name="btn-cadastrar" class="btn btn-warning">Cadastrar</button>
	</div>
</div>
<footer class="footer fixed-bottom py-3 bg-warning">
    <div class="container text-light">
      <span class="text-muted">© 2023.Direstudo</span>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>