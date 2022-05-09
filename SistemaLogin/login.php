<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Refletindo Penal</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>

<body>
    <div class="main-login">
        <div class="left-login">
            <h1><a href="https://www.instagram.com/refletindopenal" style="text-decoration:none">Refletindo Penal</a>
            </h1>
            <img src="autenticacao.svg" class="left-login-image" alt="autenticacao">
        </div>

        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <?php
                        if(isset($_SESSION['nao_autenticado'])):
                    ?>
                <div class="danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>
                <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                    ?>

                <form action="autenticacao.php" class="form-login" method="POST">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <button class="btn-login">Login</button>
                </form>

            </div>
        </div>


    </div>

</body>

</html>