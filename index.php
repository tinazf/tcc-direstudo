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
  <?php include_once("cabecalho.php"); ?>
  <div class="container">
    <div class="row m-4">
      <div class="float-left">
        <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?> " class="form-inline">
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
          <?php if (isset($_GET["buscar"])) {
          $buscar = mysqli_escape_string($conecta, $_GET['barra']);
          $sql = "SELECT * FROM categoria WHERE categoria LIKE '%$buscar%'";
          $resultado = mysqli_query($conecta, $sql);

          if (mysqli_num_rows($resultado) > 0) {
            while ($dados = mysqli_fetch_assoc($resultado)) { ?>
              <div class="col-xl-3">
                <div class="card ms-5" style="width: 13rem;">
                  <a href="visualizar_categoria.php" class="link-body-emphasis text-dark text-decoration-none">
                    <img src="assets/imgCategorias/contratoEmpres..jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title"><?= $dados['categoria']; ?></h5> 
                      <p class="card-text"><?= $dados['descricao']; ?></p>
                    </div>
                  </a>
                </div>
              </div>
          <?php }
          } else {
            echo "Nenhum resultado encontrado.";
          }
        } else { ?>
          <div class="row py-2 mt-3">
            <div class="col-xl-3">
              <div class="card ms-5" style="width: 13rem;">
                <a href="contratoemp.php" class="link-body-emphasis text-dark text-decoration-none">
                  <img src="assets/imgCategorias/contratoEmpres..jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Contrato Empresarial</h5>
                    <p class="card-text"> Aqui são encontrados acordos legais entre empresas ou empresários individuais,
                      estabelecendo obrigações e direitos relativos a atividades comerciais e transações comerciais.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="card ms-5" style="width: 13rem;">
                <a href="" class="link-body-emphasis text-dark text-decoration-none">
                  <img src="assets/imgCategorias/direitoConstitucional.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Direito Constitucional</h5>
                    <p class="card-text">Nessa categoria são encontrados documentos referentes a interpretação e analisase do cumprimento da constituição do país</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="card ms-5" style="width: 13rem;">
                <a href="" class="link-body-emphasis text-dark text-decoration-none">
                  <img src="assets/imgCategorias/direitoCivil.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Direito Civil </h5>
                    <p class="card-text">Essa categoria trata das relações e direitos entre indivíduos, onde se trata de contratos, responsabilidade civil, propriedade, família e sucessões</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="card ms-5" style="width: 13rem;">
                <a href="" class="link-body-emphasis text-dark text-decoration-none">
                  <img src="assets/imgCategorias/direitoAdministrativo.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Direito Administrativo</h5>
                    <p class="card-text"> Abrange temas como licitações, contratos administrativos, servidores públicos e o exercício do poder público, garantia da legalidade, eficiência e interesse público na gestão estatal</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row p-2">
            <div class="col-xl-3">
              <div class="card ms-5" style="width: 13rem;">
                <a href="" class="link-body-emphasis text-dark text-decoration-none">
                  <img src="assets/imgCategorias/direitoPenal.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Direito Penal</h5>
                    <p class="card-text">.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="card ms-5" style="width: 13rem;">
                <a href="" class="link-body-emphasis text-dark text-decoration-none">
                  <img src="assets/imgCategorias/direitoTrabalho.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Direito do Trabalho</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="card ms-5" style="width: 13rem;">
                <a href="" class="link-body-emphasis text-dark text-decoration-none">
                  <img src="assets/imgCategorias/eticaProfissional.jpg" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Ética Profissional</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3">
              <div class="card ms-5" style="width: 13rem;">
                <a href="" class="link-body-emphasis text-dark text-decoration-none">
                  <img src="assets/book.png" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Contrato Empresarial</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php include_once('rodape.php'); ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>