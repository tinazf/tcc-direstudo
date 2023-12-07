<?php
require_once "conexao.php";
$conecta = conectar();
if (isset($_POST['editar'])) {
    if (isset($_POST['id_documento'], $_POST['titulo'], $_POST['categoria'], $_POST['autor'], $_POST['descricao'], $_POST['descricao'], $_POST['arquivo'])) {
        $id = $_POST['id_documento'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];
        $arquivo = $_POST['arquivo'];

        $sql = "UPDATE documento SET titulo='$titulo', categoria='$categoria', descricao='$descricao', arquivo='$arquivo' WHERE id_documento=" . $id;
        // echo $sql;
        // die();
        $resultado = mysqli_query($conecta, $sql);
        if ($resultado == true) {
            echo "<script> alert ('Documento editado com sucesso!'); </script>";
            echo " <script> location.href='lista_doc.php'; </script>";
        }
        if (!$resultado) {
            die('Erro na consulta: ' . mysqli_error($conecta));
        } else {
            //$dados = mysqli_fetch_assoc($resultado);
            header("location: lista_doc.php");
        }
    }
}
if(isset($_GET['editar'])){
    $id = $_GET['editar'];
} else {
    $id = $_POST['id_documento'];
}
$sql = "SELECT * FROM documento WHERE id_documento =" . $id;
$resultado = mysqli_query($conecta, $sql);
if (!$resultado) {
    die('Erro na consulta: ' . mysqli_error($conecta));
} else {
    $dados = mysqli_fetch_assoc($resultado);
}
?>
<h3>Editar informações do usuário</h3>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</div>
</div>
</div>
<form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
    <div class="row">
    <div class="col-xl-12">
        <input type="hidden" name="id_documento" value="<?= $id; ?>" />
        <div class="col-xl-12">
            <label for="titulo" class="form-label">Título:</label>
            <input id="titulo" class="form-control" type="text" name="titulo" value="<?= $dados['titulo']; ?>">
            
            <label for="categoria" class="form-label">Categoria:</label>
            <input id="categoria" class="form-control" type="text" name="categoria" value="<?= $dados['categoria']; ?>">
            
            <label for="autor" class="form-label">Autor:</label>
            <input id="autor" class="form-control" type="text" name="autor" value="<?= $dados['autor']; ?>">
            
            <label for="descricao" class="form-label">Descrição:</label>
            <input id="descricao" class="form-control" type="text" name="descricao" value="<?= $dados['descricao']; ?>">
            
            <label for="arquivo" class="form-label">Arquivo:</label>
            <input id="arquivo" class="form-control" type="file" name="arquivo" value="<?= $dados['arquivo']; ?>">
            
            <div class="py-2"></div>
            <button class="btn btn-warning py-2" type="submit" name="editar">Salvar Edição</button>
        </div>
    </div>
</div>
    
</form>
