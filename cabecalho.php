<?php if (isset($_SESSION)) { ?>
  <div class="row">
    <header style="background-color:gold">
      <nav class="navbar navbar-expand-sm">
        <div class="container p-1 mb-2">
          <a class="text-dark link-body-emphasis text-decoration-none" href="index.php">
            <img src="" alt="Logo" width="auto" height="50px" class="navbar-brand me-3">
            Biblioteca Jurídica</a>
        </div>
        <ul class="navbar-nav">
          <li class="nav-link"><a class="nav-link link-body-emphasis text-light" href="#">Conteúdo</a></li>
        </ul>
        <div class="dropdown">
          <a class="d-block link-body-emphasis text-decoration-none dropdown-toggle text-light" data-bs-toggle="dropdown" aria-expanded="false">Conta</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
            <li><a class="dropdown-item" href="edit_usuario.php?id_usuario=<?php echo $_SESSION['id_usuario']; ?>">Editar Conta</a></li>
          </ul>
        </div>
      </nav>
    </header>
  </div>
  <nav class="navbar navbar-lingt">
    <div class="container-fluid">

      <nav class="navbar navbar-expand-lg" style="background-color: gold">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-3 mb-lg-8">
            <li class="nav-item"><a class="nav-link action" href="#">central</a></li>
          </ul>
          <div class="dropdown">
            <a class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-br-toggle="dropdown" aria-expanded="false">Perfil</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Editar Conta</a></li>
              <li><a class="dropdown-item" href="#">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>
<?php } else { ?>
  <nav class="navbar navbar-lingt" style="background-color:gold">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;"> Biblioteca Jurídica </font>
      </a>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg" style="background-color: gold">
    <div class="container-fluid" style="margin-left: 30px">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-3 mb-lg-8">
          <li class="nav-item">
            <a class="nav-link action" href="index.php">Página Inícial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link action" aria-current="page" href="cadastrar.php">Cadastrar-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link action" href="login.php" aria-current="page">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php } ?>