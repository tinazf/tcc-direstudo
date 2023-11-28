<?php
require_once "conexao.php";

$conecta = conectar();

$id = $_GET['editar'];

$sql = "SELECT * FROM usuarios WHERE codusuario=" . $id;
$resultado = mysqli_query($conecta, $sql);
$dados = mysqli_fetch_assoc($resultado);
if (isset($_POST['editar'])) {
    $id= $_POST ['codusuario'];
    $nome= $_POST ['nome'];
    $cpf= $_POST ['cpf'];
    $email= $_POST ['email'];
    $senha= $_POST ['senha'];

    $sql = "UPDATE usuarios SET nome='$nome', cpf='$cpf', email='$email', senha='$senha' WHERE codusuario=$id";
    mysqli_query($conecta, $sql);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-white pb-2">
            <div class="container border-bottom p-1 mb-2">
                <img src="./assets/favicon.png" class="navbar-brand me-3" width="50" height="auto">
                <ul class="navbar-nav text-end">
                    <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-secondary" href="cadastra.php">Cadastrar</a></li>
                    <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-secondary" href="login.php">Login</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <hr>
    <div class="container">
        <h2>Editar usuario</h2>
        <div class="row">
            <form method= "post"> 
                 <font face="Arial">
                 <input type="hidden" name="codusuario" value="<?php echo $id; ?>" />
                 <div class="form-group">
                 <label>Nome: </label> 
                 <input type="text" name="nome" value="<?php echo $dados['nome']; ?>"><br><br>
                 </div>

                 <div class="form-group">
                 <label>Seu CPF: </label> 
                <input type="cpf" name="cpf"  value="<?php echo $dados['cpf']; ?>"><br><br>
                </div>
                
                <div class="form-group">
                <label>Informe um e-mail válido: </label>
                  <input type="text" name="email" value="<?php echo $dados['email']; ?>" required="required"><br><br>
                </div>

                <div class="form-group">
                <label>Senha: </label>
                 <input type="password" name="senha" value="<?php echo $dados['senha']; ?>"><br><br>
                </div>
                 <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="editar"> Salvar edição</button>
                </div>
        </font>
    </form>
    <hr>
    <footer class="py-3 my-3 bg-white text-secondary">
        <div class="container">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a class="nav-link link-body-emphasis px-2 text-secondary" href="index.php">página inicial</a></li>
            </ul>
             <p class="text-center text-secondary">Instituto Federal Farroupilha - Campus Avançado Uruguaiana</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</body>
</html>