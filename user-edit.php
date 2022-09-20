<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de dados do usuário</title>
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
        #entrar{
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        #botao-entrar{
            width:fit-content;
            height: 30px;
            margin: 10px;
            box-shadow: 2px 2px 5px grey;
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
    if (!isLogado())
        echo msgErro("Efetue o <strong><a href='user-login.php'>login</a></strong> para poder editar seus dados.");
    else{
        if (!isset($_POST['usuario']))
            include 'user-edit-form.php';
        else{
            $usuario=$_POST['usuario']??null;
            $nome=$_POST['nome']??null;
            $tipo=$_POST['tipo']??null;
            $senha1=$_POST['senha1']??null;
            $senha2=$_POST['senha2']??null;

            $q="UPDATE usuarios SET usuario='$usuario', nome='$nome'";

            if (empty($senha1) || is_null($senha1))
                echo msgAviso("Senha antiga foi mantida!");
            else if ($senha1===$senha2){
                $senha=gerarHash($senha1);
                $q.=", senha='$senha'";
            }
            else
                echo msgErro("Senhas não conferem, a senha anterior será mantida.");
            
            $q.=" where usuario='".$_SESSION['user']."'";

            if ($banco->query($q)){
                echo msgSucesso("Usuário alterado com sucesso!");
                logout();
                echo msgAviso("Por segurança, efetue o <strong><a href='user-login.php'>login</a></strong> novamente.");
            }
            else
                echo msgErro("Não foi possível alterar os dados.");
        }
    }
    echo voltar();
?>
</div>
<?php
include_once 'rodape.php';
?>
</body>
</html>