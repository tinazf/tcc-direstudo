<?php
session_start();
require_once "conexao.php";
$conecta = conectar();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="./assets/livro.png" type="image/x-icon">
  <title>Direstudo</title>
  <style>
    .text_just {
      text-align: justify;
    }

    .body {
      background: gold;
      display: flex;
      justify-content: right;
      align-items: center;
      min-height: 100vh;
    }
  </style>
</head>

<body>
  <?php require_once "cabecalho.php"; ?>
  <br><br>
  <figure>
    <div class="container">
      <div class="float-left">
        <form method="GET" class="form-inline">
          <div class="input-group mt-3 mx-auto shadow" style="width: 35%;">
            <input class="form-control text-center" name="barra" type="search" aria-label="Search" id="categoria" placeholder="Pesquise por uma categoria">
            <div class="input-group-append">
              <button class="btn btn-success" name="buscar" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="35" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg> Buscar
              </button>
            </div>
          </div>
        </form>
      </div>
      <div class="row py-3">
        <div class="col-xl-3">
          <div class="card">
            <a href="" class="btn btn-sucess">
              <img class="card-img-top" src="assets/book.png" alt="imagem book">
              <div class="card-body">
                <h5 class="card-title">Contrato Empresarial</h5>
                <p class="card-text"> Neste campo são encontrados livros, bibliografias... </p>
            </a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="card">
            <a href="" class="btn btn-sucess">
              <img class="card-img-top" src="assets/book.png" alt="imagem book">
              <div class="card-body">
                <h5 class="card-title">Direito</h5>
                <p class="card-text"> Neste campo são encontrados livros, bibliografias... </p>
            </a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="card" style="width: 13rem;">
            <a href="" class="btn btn-sucess">
              <img class="card-img-top" src="assets/book.png" alt="imagem book">
              <div class="card-body">
                <h5 class="card-title">Ética</h5>
                <p class="card-text"> Neste campo são encontrados livros, bibliografias... </p>
            </a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="card" style="width: 13rem;">
            <a href="" class="btn btn-sucess">
              <img class="card-img-top" src="assets/book.png" alt="imagem book">
              <div class="card-body">
                <h5 class="card-title">Estatuto da Criança e Adolescente</h5>
                <p class="card-text"> Neste campo são encontrados livros, bibliografias... </p>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3">
          <div class="card" style="width: 13rem;">
            <a href="" class="btn btn-sucess">
              <img class="card-img-top" src="assets/book.png" alt="imagem book">
              <div class="card-body">
                <h5 class="card-title">Processo Civil</h5>
                <p class="card-text"> Neste campo são encontrados livros, bibliografias... </p>
            </a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="card" style="width: 13rem;">
            <a href="" class="btn btn-sucess">
              <img class="card-img-top" src="assets/book.png" alt="imagem book">
              <div class="card-body">
                <h5 class="card-title">Processo Trabalho</h5>
                <p class="card-text"> Neste campo são encontrados livros, bibliografias... </p>
            </a>
          </div>
        </div>
        <div class="col-xl-3">
          <div class="card" style="width: 13rem;">
            <a href="" class="btn btn-sucess">
              <img class="card-img-top" src="assets/book.png" alt="imagem book">
              <div class="card-body">
                <h5 class="card-title">Processo Penal</h5>
                <p class="card-text"> Neste campo são encontrados livros, bibliografias... </p>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="card" style="width: 13rem;">
          <a href="" class="btn btn-sucess">
            <img class="card-img-top" src="assets/book.png" alt="imagem book">
            <div class="card-body">
              <h5 class="card-title">Processo Empresarial</h5>
              <p class="card-text"> Neste campo são encontrados livros, bibliografias... </p>
          </a>
        </div>
      </div>
    </div>
  </figure>
  <footer class="footer fixed-bottom py-3 bg-warning">
    <div class="container text-light">
      <span class="text-muted">© 2023.Direstudo</span>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>