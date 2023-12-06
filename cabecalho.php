<?php if (isset($_SESSION['id_usuario'])) { ?>
  <div class="row">
    <header style="background-color: gold">
      <nav class="navbar navbar-expand-sm">
        <div class="container p-1 mb-2">
          <a class="text-dark link-body-emphasis text-decoration-none" href="index.php"><img src="./assets/Logo_branco.png" alt="Logo" width="120px" height="auto" class="navbar-brand me-3"></img></a>
        <ul class="navbar-nav">
          <li class="nav-link"><a class="nav-link text-dark link-body-emphasis" href="#">Conteúdo</a></li>
        </ul>
        <div class="dropdown">
          <a class="d-block link-body-emphasis text-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Perfil</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="perfil.php?id_usuario=<?= $_SESSION['id_usuario']; ?>">Configurações</a></li>
            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
      </nav>
    </header>
  </div>
<?php } else { ?>
  <header class="row">
    <nav class="navbar navbar-expand-sm" style="background-color: gold;">
      <div class="container p-1 mb-2">
        <a href="index.php" class="text-dark link-body-emphasis text-decoration-none"><img class="navbar-brand me-3" src="./assets/Logo_branco.png" alt="Logo" width="120px" height="auto" style="vertical-align: inherit;"></img></a>
        <nav class="navbar-nav text-end">
          <li class="nav-item"><a class="nav-link link-body-emphasis text-dark" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link link-body-emphasis text-dark" href="cadastrar.php">Cadastre-se</a></li>
</nav>
      </div>
    </nav>
  </header>
<?php } ?>