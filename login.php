<?php
require_once "conexao.php";
$conecta = conectar();
if (isset($_POST['login'])) {
    if (empty($_POST["email"])) {
        echo "Digite um email";
    } else if (empty($_POST["senha"])) {
        echo "Preencha sua senha";
    } else {
        $email = mysqli_escape_string($conecta, $_POST['email']);
        $senha = mysqli_escape_string($conecta, $_POST['senha']);

        $sql = "SELECT * FROM usuario WHERE email = '$email'";
        $resultado = mysqli_query($conecta, $sql);

        if (mysqli_num_rows($resultado) == 1) {
            $usuario = mysqli_fetch_array($resultado);
            if (password_verify($senha, $usuario['senha'])) {
                session_start();
                $_SESSION["id_usuario"] = $usuario["id_usuario"];
                $_SESSION["email"] = $usuario["email"];
                header("Location: index.php");
            } else {
                echo "Senha incorreta";
            }
        } else {
            echo "Email ou senha incorretos";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/stylelogin.css">
    <!--<link rel="stylesheet" href="./assets/css/bootstrap.css">-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./assets/livro.png" type="image/x-icon">
    <title> Login | Biblioteca Jurídica </title>
</head>

<body>
    <div class="col">
        <img src="./assets/Logo_branco.png" alt="Logo" width="500px" height="auto" class="navbar-brand" style="margin-right: 120px;margin-top : 30px;"></img>
    </div>
    <div class="wrapper">
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?> ">
            <h1>Login</h1>
            <div class="input-box">
                <i class='bx bxs-user-circle'><label> Email </label></i>
                <input class="form-control" type="text" name="email" placeholder="Email de login" /><br>
            </div>
            <div class="input-box">
                <i class='bx bx-lock-alt'><label> Senha </label></i>
                <input class="form-control" type="password" name="senha" placeholder="senha" /><br>
            </div>
            <div class="button">
                <button class="btn btn-warning" type="submit" name="login"> Logar </button>
            </div>
            <div class="register-link">
                <br>
                <p> Não possui cadastrado? <a href="cadastrar.php">Cadastre-se</a></p>
            </div>
        </form>
    </div>
</body>

</html>