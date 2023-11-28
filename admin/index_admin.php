<?php
// Conexão com BD
include_once '../db_connect.php';
// puxar header da outra pasta
include_once 'crud_roupas/includes/header.php';
// trazendo messagem do outro arquivo
include_once 'crud_roupas/includes/mensagem.php';
?>

    <!--nav superior com menus-->
	<body>
    <nav class="rounded shadow bg-light mt-3">
		<ul class="nav nav-pills nav-justified">
            <li class="nav-item"><a href="#" class="float-start"><img src="../logo.png" style="width:100px;" alt="logo"></a></img></li>
			<li class="nav-item mt-5"><a href="crud_roupas/adicionar_roupa.php" class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;">Cadastrar nova peça</a></li>
            <li class="nav-item mt-5" ><a href="crud_usuarios/adicionar_usuario.php"  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;" >Cadastrar novo usuário</a></li>
            <li class="nav-item mt-5" ><a href="../caixa.php"  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;color: white;" >Caixa de solicitações</a></li>
			<li class="nav-item mt-5"><button type="button"  class="text-decoration-none btn btn-outline" style="background-color: #F7941D;"><a href="../index.php" class="text-decoration-none" style="color: white ;" >Sair</a></button></li>
		</ul>
		
	</nav>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Listar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Usuários cadastrados</a></li>
            <li><a class="dropdown-item" href="#">Peças cadastradas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Listar tudo</a></li>
          </ul>
        </li>
      </ul>
	  <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Pesquisar">
        <button class="btn btn-outline-success" type="submit" >Pesquisar</button>
      </form>
    </div>
  </div>
</nav>

    <!--Puxando as roupas cadastradas-->
 <div class="container mt-3">
    <?php 

    $sql = "SELECT * FROM roupa";
    $resultado = mysqli_query($connect, $sql);
    $qtLinhas = mysqli_num_rows($resultado);

    if($qtLinhas > 0): ?>        
    <div class="row">
        <?php while ($dados = mysqli_fetch_assoc($resultado)): ?>
            <div class="col-md-3">
                <div class="card" style="width:200px">
                <img class="card-img-top" src= "crud_roupas/foto_roupa/<?php echo $dados['imagem']; ?>" alt="Card image" style="width:100%">   
                <div class="card-body">
                        <h4 class="card-title"> <?php echo $dados['nome']; ?></h4>
                        <p class="card-text"> <?php echo $dados['descricao']; ?></p>
                        <a href="usuario/sessao/login.php" class="text-decoration-none btn btn-outline"  style="color: #F7941D;">Ver histórias</a>
                        <a href="crud_roupas/editar_roupa.php?id_roupa=<?php echo $dados['id_roupa']; ?>" class="text-decoration-none btn btn-outline"  style="color: #F7941D;">Editar</a>
						<a href="#" name="btn-deletar" class="text-decoration-none btn btn-outline"  style="color:#F7941D;">Excluir</a>
                    </div>
                </div>
            </div>
        <?php endwhile;
        endif;
        ?>
    </div>       
</div>
 
<!--rodaé do index-->

</body>

</html>