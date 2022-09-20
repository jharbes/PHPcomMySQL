<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo usuário</title>
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
    <link rel="shortcut icon" href="/icones/mario.ico" type="image/x-icon">
</head>
<body>
<?php
require_once 'includes/banco.php';
require_once 'includes/funcoes.php';
require_once 'includes/login.php';
?>
<div id="corpo">
<?php
    if (!isAdmin())
        echo msgErro("Área Restrita: Você não é Administrador!");
    else{
        if (!isset($_POST['usuario']))
            require 'user-new-form.php';
        else{
            $usuario=$_POST['usuario']??null;
            $nome=$_POST['nome']??null;
            $senha1=$_POST['senha1']??null;
            $senha2=$_POST['senha2']??null;
            $tipo=$_POST['tipo']??null;

            echo "Pronto para salvar dados";
        }
    }

    echo voltar();
?>
</div>
</body>
</html>