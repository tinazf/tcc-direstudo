<?php
session_start();
require_once "conexao.php";
$conecta = conectar();
$id = $_SESSION['id_usuario'];
echo "<p>Documentos cadastrados</p>";
$sql = "SELECT * FROM documento WHERE id_usuario=" . $id;
$resultado = mysqli_query($conecta, $sql);
while ($dados = mysqli_fetch_assoc($resultado)) :
?>
     <tr>
    <div class="p-3 mb-2 bg-light text-dark">
        <div class="card-body">
            <td> <?php echo "Titulo: " . $dados['titulo']; ?> </td><br>
            <td> <?php echo "Autor: " . $dados['autor']; ?> </td><br>
            <td><?php echo "Descrição: " . $dados['descricao']; ?> </td><br>
            <td><?php echo "Arquivo: " . $dados['arquivo']; ?> </td> 
            <td>
        </div>
<div class="form-group">
    <button type="button" class="card-link m-2 btn btn-outline-danger text-dark"><a href="deletar.php?deletar=<?php echo $dados['codusuario']; ?>">Excluir</a></button>
</div>
</div>
</td>
</tr>
    <?php endwhile;
?>