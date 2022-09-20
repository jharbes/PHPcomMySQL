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
            width: 100px;
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

            if ($senha1===$senha2){
                if (empty($usuario || empty($nome) || empty($senha1) || empty($senha2) || empty($tipo))){
                    echo msgErro("Todos os dados são obrigatórios!");
                }
                else
                    $senha=gerarHash($senha1);
                    $q="INSERT INTO usuarios (usuario,nome,senha,tipo) VALUES ('$usuario','$nome','$senha','$tipo')";
                    if ($banco->query($q))
                        echo msgSucesso("Usuário $usuario cadastrado com sucesso!");
                    else
                        echo msgErro("Não foi possível criar o usuário $usuario, talvez esse nome de usuário já esteja em uso.");
            }
            else
                echo msgErro("Senhas não conferem, repita o procedimento!");
        }
    }

    echo voltar();
?>
</div>
</body>
</html>