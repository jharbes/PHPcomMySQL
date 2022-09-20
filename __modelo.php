<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo de pagina</title>
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

<?php echo voltar(); ?>
</div>
<?php
include_once 'rodape.php';
?>
</body>
</html>