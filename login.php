<?php
require_once "conexao.php";
$conecta = conectar();
if (isset($_POST['login'])) {
    if (empty($_POST["email"])) {
        $msg = 1;
    } else if (empty($_POST["senha"])) {
        $msg = 2;
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
                $msg = 3;
            }
        } else {
            $msg = 4;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/stylelogin.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="./assets/livro.png" type="image/x-icon">
    <title> Login | Biblioteca Jurídica </title>
</head>

<body class="fundo">
    <div class="col">
        <img src="./assets/Logo_branco.png" alt="Logo" width="600px" height="auto" class="ms-5 ps-5" style="margin-right: 120px; margin-top: 30px;"></img>
    </div>
    <div class="wrapper">
        <h1 class="p-2">Login</h1>
        <?php if (isset($msg)) :
            if ($msg == 1) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    Digite um email!
                </div>
            <?php } else if ($msg == 2) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    Digite uma senha!
                </div>
            <?php } else if ($msg == 3) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    Senha incorreta!
                </div>
            <?php } else if ($msg == 4) { ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    Email ou senha incorreto!
                </div>
        <?php }
        endif ?>
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <div class="input-box">
                <i class='bx bxs-user-circle'><label> Email:</label></i>
                <input class="form-control" type="text" name="email" placeholder="Email de login" /><br>
            </div>
            <div class="input-box">
                <i class='bx bx-lock-alt'><label> Senha:</label></i>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>