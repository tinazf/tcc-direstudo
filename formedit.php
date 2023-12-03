<?php
require_once "conexao.php";
$conecta = conectar();
$id = $_GET['id_usuario'];
$sql = "SELECT * FROM usuario WHERE id_usuario=" . $id;
$resultado = mysqli_query($conecta, $sql);
if (!$resultado) {
    die('Erro na consulta: ' . mysqli_error($conecta));
} else {
    $dados = mysqli_fetch_assoc($resultado);
}
if (isset($_POST['editar'])) {
    if (isset($_POST['id_usuario'], $_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha'])) {
        $id = $_POST['id_usuario'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "UPDATE usuario SET nome='$nome', cpf='$cpf', email='$email', senha='$senha' WHERE id_usuario=" . $id;
        $resultado = mysqli_query($conecta, $sql);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <hr>
    <div class="container">
        <h2>Editar usuário</h2>
        <div class="row">
            <form method="post">
                <input type="hidden" name="id_usuario" value="<?php echo $id; ?>" />

                <div class="form-group">
                    <label>Nome: </label>
                    <input type="text" name="nome" value="<?php echo $dados['nome']; ?>"><br><br>
                </div>

                <div class="form-group">
                    <label>Seu CPF: </label>
                    <input type="text" name="cpf" value="<?php echo $dados['cpf']; ?>"><br><br>
                </div>

                <div class="form-group">
                    <label>Informe um e-mail válido: </label>
                    <input type="text" name="email" value="<?php echo $dados['email']; ?>" required="required"><br><br>
                </div>

                <div class="form-group">
                    <label>Senha: </label>
                    <input type="password" name="senha"><br><br>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="editar">Salvar edição</button>
                </div>
            </form>
        </div>
    </div>
    <?php include_once('rodape.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>