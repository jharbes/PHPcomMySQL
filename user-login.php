<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
    <link rel="shortcut icon" href="/icones/mario.ico" type="image/x-icon">
    <style>
        h2{
            text-align: center;
            margin-bottom: 20px;
        }
        div#corpo{
            font-size: 15pt;
        }
        table td{
            padding: 10px;
        }
        input#botao-entrar{
            width: 100px;
            height: 30px;
            margin: 10px;
        }
    </style>
</head>
<body>
<?php
require_once 'includes/banco.php';
require_once 'includes/funcoes.php';
require_once 'includes/login.php';
?>
<div id="corpo">
    <?php
        $u=$_POST['usuario']??null;
        $s=$_POST['senha']??null;

        if (is_null($u) || is_null($s))
            require 'user-login-form.php';
        else
            echo "Dados enviados!";
    ?>

</div>
</body>
</html>