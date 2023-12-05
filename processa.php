<?php
require_once "conexao.php";
$conecta = conectar();

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuario (nome, cpf, email, senha) 
            VALUES ('$nome','$cpf', '$email', '$senha_hash')";
    $resultado = mysqli_query($conecta, $sql);
    if ($resultado == true) {
        echo "Usuário cadastrado com sucesso!";
        header("Location: login.php");
    } else {
        echo "erro ao cadastrar" . mysqli_error($conecta);
    }
}

/*lista
echo "<p>Usuarios cadastrados";
while ($dados = mysqli_fetch_assoc($resultado)) :
?>
     <tr>
    <div class="p-3 mb-2 bg-light text-dark">
        <div class="card-body">
            <td> <?php echo "Nome: " . $dados['nome']; ?> </td><br>
            <td> <?php echo "CPF: " . $dados['cpf']; ?> </td><br>
            <td><?php echo "Email: " . $dados['email']; ?> </td><br>
            <td><?php echo "Senha: " . $dados['senha']; ?> </td> 
            <td>
        </div>
        <div class="form-group">
        <button type="button" class="card-link m-2 btn btn-outline-info text-dark"><a href="formedit.php?editar=<?php echo $dados['codusuario']; ?>">Editar</a></button>
            <button type="button" class="card-link m-2 btn btn-outline-danger text-dark"><a href="deletar.php?deletar=<?php echo $dados['codusuario']; ?>">Excluir</a></button>
        </div>
    </div>
            </td>
            </tr>
    <?php endwhile;
}?>
<hr>
<div class="container"></div>
<a href="index.php"></a>*/
