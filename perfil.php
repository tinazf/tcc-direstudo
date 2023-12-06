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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styleperfil.css">
    <title>Perfil Usuário</title>
</head>
<body>

<div class="profile-container">
    <h1>Perfil</h1>
    <h2>Editar informações do usuário</h2>
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
                    <button class="button" onclick="confirmEdit()" type="submit" name="editar">Salvar edição</button>
                </div>
            </form>

    <br><br><button class="delete-button" onclick="confirmDelete()">Excluir Perfil</button>
</div>
<script>
    function confirmEdit() {
        var confirmEdit = confirm("Tem certeza de que deseja excluir seu perfil? Esta ação não pode ser desfeita.");

    if (confirmEdit) {
            alert("Perfil excluído com sucesso!");
            // Redirecionar para a página inicial ou fazer qualquer outra ação necessária após a exclusão.
        } else {
            // Ação a ser tomada se o usuário cancelar a exclusão.
            alert("A exclusão do perfil foi cancelada.");
        }
    }
</script>
<script>
    function confirmDelete() {
        var confirmDelete = confirm("Tem certeza de que deseja excluir seu perfil? Esta ação não pode ser desfeita.");

        if (confirmDelete) {
            if (isset($_GET['deletar'])) {
        $id = $_GET['deletar'];

         $sql = "DELETE FROM usuario WHERE id_usuario=" . $id;
        mysqli_query($conecta, $sql);
            alert("Perfil excluído com sucesso!");
            // Redirecionar para a página inicial ou fazer qualquer outra ação necessária após a exclusão.
        } else {
            // Ação a ser tomada se o usuário cancelar a exclusão.
            alert("A exclusão do perfil foi cancelada.");
        }
    }
}
</script>

</body>
</html>
