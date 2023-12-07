<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Documentos | Biblioteca Jurídica </title>

<body>
  <header style="background-color: gold">
    <nav class="navbar navbar-expand-sm">
      <div class="container p-1 mb-2">
        <a class="text-dark link-body-emphasis text-decoration-none" href="index.php"><img src="./assets/Logo_branco.png" alt="Logo" width="120px" height="auto" class="navbar-brand me-3"></img></a>
        <ul class="navbar-nav">
          <li class="nav-link"><a class="nav-link text-dark link-body-emphasis" href="lista_doc.php">Documentos cadastrados</a></li>
        </ul>
        <div class="dropdown">
          <a class="d-block link-body-emphasis text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href=".php?id_usuario=<?= $_SESSION['id_usuario']; ?>">Configurações</a></li>
            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <br><br>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2>Cadastrar um documento</h2>
      <form method="POST" action="create_documento.php" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome do documento</label>
          <input type="text" class="form-control" name="titulo" id="nome" required>
        </div>
        <div class="mb-3">
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
        <button type="submit" name="btn-cadastrar" class="btn btn-warning">Cadastrar</button>
    </div>