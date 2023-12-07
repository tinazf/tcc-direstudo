<?php
require_once "conexao.php";
$conecta = conectar();

if (isset($_POST['editar'])) {
    if (isset($_POST['id_usuario'], $_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha'])) {
        $id = $_POST['id_usuario'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "UPDATE usuario SET nome='$nome', cpf='$cpf', email='$email', senha='$senha_cript' WHERE id_usuario=" . $id;
        $resultado = mysqli_query($conecta, $sql);
    }
} 
if(isset($_GET['id_usuario'])){
    $id = $_GET['id_usuario'];
} else {
    $id = $_POST['id_usuario'];
}
$sql = "SELECT * FROM usuario WHERE id_usuario=" . $id;
$resultado = mysqli_query($conecta, $sql);
if (!$resultado) {
    die('Erro na consulta: ' . mysqli_error($conecta));
} else {
    $dados = mysqli_fetch_assoc($resultado);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <title>Perfil Usuário</title>
</head>

<body>
    <?php include_once('cabecalho.php'); ?>
    <button type="button" href="index.php" class="btn btn-link">Voltar para a tela inicial</button>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="text-center">
                    <h1>Perfil</h1>
                    <hr>
                    <h3>Editar informações do usuário</h3>
                </div>
            </div>
        </div>
        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
            <div class="row">
                <input type="hidden" name="id_usuario" value="<?= $id; ?>" />
                <div class="col-xl-12">
                    <label class="form-label">Nome:</label>
                    <input class="form-control" type="text" name="nome" class="input" value="<?= $dados['nome']; ?>">
                    <label class="form-label">Seu CPF:</label>
                    <input class="form-control" type="text" name="cpf" class="input" value="<?= $dados['cpf']; ?>">
                    <label class="form-label">Email:</label>
                    <input class="form-control" type="text" name="email" class="input" value="<?= $dados['email']; ?>" require>
                    <label class="form-label">Senha:</label>
                    <input class="form-control" type="password" name="senha" class="input">
                    <div class="py-2"></div>
                    <button class="btn btn-warning py-2" type="submit" name="editar">Salvar Edição</button>
                </div>
            </div>
        </form>
        <br><a class="btn btn-danger" href="deletar.php?deletar=<?= $dados['id_usuario']; ?>">Excluir Perfil</a>
    </div>
    <!--<script>
        function confirmEdit() {
            var confirmEdit = confirm("Tem certeza de que deseja editar seu perfil? Esta ação não pode ser desfeita.");

            if (confirmEdit) {
                alert("Perfil editado com sucesso!");
                // Redirecionar para a página inicial ou fazer qualquer outra ação necessária após a edição.
            } else {
                // Ação a ser tomada se o usuário cancelar a ediçao.
                alert("A edição do perfil foi cancelada.");
            }
        }
        function confirmDelete() {
            var confirmDelete = confirm("Tem certeza de que deseja excluir seu perfil? Esta ação não pode ser desfeita.");

            if (confirmDelete) {
                if (isset($_GET['deletar'])) {
                    $id = $_GET['deletar'];
                    <?php //$sql = "DELETE FROM usuario WHERE id_usuario =". $id;
                    // mysqli_query($conecta, $sql); ?>
                    alert("Perfil excluído com sucesso!");
                    // Redirecionar para a página inicial ou fazer qualquer outra ação necessária após a exclusão.
                } else {
                    // Ação a ser tomada se o usuário cancelar a exclusão.
                    alert("A exclusão do perfil foi cancelada.");
                }
            }
        }
    </script>-->

</body>

</html>