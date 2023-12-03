<?php
require_once "conexao.php";
$conecta = conectar();
$id = $_POST['editar'];
if (isset($_POST['editar'])){
$sql = "SELECT * FROM usuario WHERE id_usuario=" . $id;
$stmt = mysqli_prepare($conecta, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if (!$resultado) {
    die('Erro na consulta: ' . mysqli_error($conecta));
}
$dados = mysqli_fetch_assoc($resultado);
if (isset($_POST ['id_usuario'],$_POST ['nome'], $_POST ['cpf'], $_POST ['email'], $_POST ['senha'] )) {
    $id= $_POST ['id_usuario'];
    $nome= $_POST ['nome'];
    $cpf= $_POST ['cpf'];
    $email= $_POST ['email'];
    $senha= $_POST ['senha'];

    $sql = "UPDATE usuario SET nome='$nome', cpf='$cpf', email='$email', senha='$senha' WHERE id_usuario=" . $id;
    $stmt = mysqli_prepare($conecta, $sql);
    mysqli_stmt_bind_param($stmt, $nome, $cpf, $email, $senha, $id);
    mysqli_stmt_execute($stmt);
}
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
    <hr>
    <div class="container">
        <h2>Editar usuario</h2>
        <div class="row">
            <form method= "post"> 
                 <font face="Arial">
                 <input type="hidden" name="id_usuario" value="<?php echo $id; ?>" />
                 <div class="form-group">
                 <label>Nome: </label> 
                 <input type="text" name="editar" value="<?php echo $dados['nome']; ?>"><br><br>
                 </div>

                 <div class="form-group">
                 <label>Seu CPF: </label> 
                <input type="cpf" name="editar"  value="<?php echo $dados['cpf']; ?>"><br><br>
                </div>
                
                <div class="form-group">
                <label>Informe um e-mail válido: </label>
                  <input type="text" name="editar" value="<?php echo $dados['email']; ?>" required="required"><br><br>
                </div>

                <div class="form-group">
                <label>Senha: </label>
                 <input type="password" name="editar" value="<?php echo $dados['senha']; ?>"><br><br>
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