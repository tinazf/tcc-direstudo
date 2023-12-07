<?php
session_start();
require_once "conexao.php";
$conecta = conectar();
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM documento WHERE id_usuario =" . $id;
$resultado = mysqli_query($conecta, $sql);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<?php include_once("cabecalho.php"); ?>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Descrição</th>
                <th>Arquivo</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    <td><?php echo $dados['titulo']; ?></td>
                    <td><?php echo $dados['autor']; ?></td>
                    <td><?php echo $dados['descricao']; ?></td>
                    <td><?php echo $dados['arquivo']; ?></td>
                    <td>
                        <div class="btn-group">
                            <a href="editardoc.php?editar=<?php echo $dados['id_documento']; ?>" class="btn btn-outline-info">Editar</a>
                        </div>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="deletardoc.php?deletar=<?php echo $dados['id_documento']; ?>" class="btn btn-outline-danger">Excluir</a>
                        </div>
                    </td>
                </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>