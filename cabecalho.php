<?php if (isset($_SESSION)) { ?>
  <nav class="navbar navbar-lingt" style="background-color:gold">
    <div class="container-fluid" style="margin-left: 30px">
      <a class="navbar-brand" href="index.php">
        <img src="" alt="logo" width="30" height="24" class="d-inline-block align-text-top">
        <font style="vertical-align: inherit;"> Biblioteca Jurídica </font>
      </a>
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