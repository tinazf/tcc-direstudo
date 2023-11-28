<?php
function conectar(){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "direstudo";
    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

    if($conexao){
        return $conexao;
    }else{
        echo "erro ao conectar".mysqli_connect_error();
    }
}


?>