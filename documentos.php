<?php
include_once('conexao.php');
$conecta = conectar();
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Documentos | Biblioteca Jurídica </title>

<body>
  <?php include_once('cabecalho.php'); ?>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Cadastrar um documento</h2>
      <form method="POST" action="create_documento.php" enctype="multipart/form-data">
        <div class="my-3">
          <label for="nome" class="form-label">Nome do documento</label>
          <input type="text" class="form-control" name="titulo" id="nome" required>
        </div>
        <div class="my-3">
          <label for="autor" class="form-label">Autor</label>
          <input type="text" class="form-control" name="autor" id="autor" required>
        </div>
        <div class="form-group col-mb-3">
          <label for="categoria">Categoria</label>
          <select id="categoria" name="categoria" class="form-control">
            <option optioned>Selecione uma categoria</option>
            <option>Contrato Empresárial</option>
            <option>Direito Constitucional </option>
            <option>Direito Civil </option>
            <option>Direito Administrativo </option>
            <option>Direito Penal </option>
            <option>Direito Do Trabalho </option>
            <option>Ética Profissional</option>
            <option>Estatuto OAB </option>
            <option>Estatuto Da Criança e Adolescente</option>
            <option>Processo</option>
            <option>Processo Civil</option>
            <option>Processo Trabalho</option>
            <option>Processo Penal</option>
            <option>Processo Empresarial</option>
          </select>
        </div>
        <div class="my-3">
          <label for="descricao" class="form-label">Descrição</label>
          <textarea class="form-control" rows="4" type="text" name="descricao" id="descricao" required></textarea>
        </div>

        <div class="row">
          <div class="col-xl-12 pb-2">
            <label class="form-label">Arquivo</label>
            <input class="form-control" type="file" name="arquivo" required>
          </div>
        </div>
        <button type="submit" name="btn-cadastrar" class="btn btn-warning">Cadastrar</button>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>