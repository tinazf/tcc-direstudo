
<div class="row">
            <form action="index.php" method= "post"> 
<div class="form-group">
    <p> Tem certeza que deseja excluir esse usuário?</p>
                    <button class="btn btn-primary" type="submit" name="deletar"> Excluir</button>
                    <button class="btn btn-primary" type="submit" name="cancelar"> Cancelar</button>
</div>
<?php
require_once "conexao.php";
$conecta = conectar();
if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];

    $sql = "DELETE FROM usuarios WHERE usuarios . codusuario=$id";
    mysqli_query($conecta, $sql);
}
?>
