<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Jogos</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
<?php
require_once 'includes/banco.php';

?>
<div id="corpo">
    <h1>Escolha seu Jogo</h1>
    <table class="listagem">
        <tr>
            <td>Foto</td><td>Nome</td><td>Adm</td>
        </tr>
        <tr>
            <td>Foto</td><td>Nome</td><td>Adm</td>
        </tr>
        <tr>
            <td>Foto</td><td>Nome</td><td>Adm</td>
        </tr>
        <tr>
            <td>Foto</td><td>Nome</td><td>Adm</td>
        </tr>
        <tr>
            <td>Foto</td><td>Nome</td><td>Adm</td>
        </tr>
    </table>
</div>
<?php
$banco->close();
?>
</body>
</html>