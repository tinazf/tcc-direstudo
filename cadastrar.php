<?php
require_once "conexao.php";
$conecta = conectar();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/stylecad.css">
  <title>Entrar | Biblioteca Jurídica </title>

<body>
  <div class="col">
    <img src="./assets/Logo_branco.png" alt="Logo" width="500px" height="auto" class="navbar-brand" style="margin-right: 120px;margin-top : 30px;"></img>
  </div>
  <div class="wrapper">
    <form method="post" action="processa.php">
      <h1>Realizar Cadastro</h1>
      <div class="input-box">
        <i class='bx bx-lock-alt'><label> Nome de Usuário </label></i>
        <input class="form-control" type="text" name="nome" placeholder="nome de usuario" /><br>
      </div>
      <div class="input-box">
        <i class='bx bxs-user-circle'><label> Email </label></i>
        <input class="form-control" type="text" name="email" placeholder="Email" /><br>
      </div>

      <div class="input-box">
        <i class='bx bx-lock-alt'><label> CPF </label></i>
        <input class="form-control" type="text" name="cpf" placeholder="000.000.000-00" /><br>
      </div>
      <div class="input-box">
        <i class='bx bx-lock-alt'><label> Senha </label></i>
        <input class="form-control" type="password" name="senha" id="password" placeholder="Crie uma senha" /><br>
      </div>
      <div class="button">
        <button class="btn btn-warning" data-toggle="modal" data-target="#modalExemplo" type="submit" name="cadastrar"> Cadastrar </button>
      </div>
      <!-- ainda sem funcionalidade
      <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmar cadastro</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Deseja finalizar seu cadastro?
              Após essa confirmação você será direcionado para a página de login.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary" href="index.php">Confirmar cadastrar</button>
            </div>
          </div>
        </div>
      </div> -->
    </form>
  </div>
</body>