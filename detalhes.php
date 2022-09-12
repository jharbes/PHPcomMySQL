<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título da Página</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
<?php
require_once 'includes/banco.php';
require_once 'includes/funcoes.php';
?>
<div id="corpo">
    <?php
        $c=$_GET["cod"]??0;
        $busca=$banco->query("select * from jogos where cod='$c'");
    ?>
    <h1>Detalhes do Jogo</h1>
    <table class="detalhes">
        <?php
        if (!$busca)
            echo "<tr><td>Busca falhou! $banco->error</tr></td>";
        else{
            if ($busca->num_rows==1){
                $reg=$busca->fetch_object();
                // Não colocar a função thumb() direto na tag img, nao vai funcionar.
                $t=thumb($reg->capa);
                echo "<tr><td rowspan='3'><img src='$t' class='full'/>";
                echo "</td></tr>
                <td><h2>$reg->nome</h2></td>";
                echo "<tr><td style='text-align: justify;'>$reg->descricao</td></tr>";
                echo "<tr><td>Adm</td></tr>";
            }
            else{
                echo "<tr><td>Nenhum registro encontrado</tr></td>";
            }
        }
        ?>
    </table>
    <a href="index.php"><img src="icones/icoback.png" alt="Voltar"></a>
</div>
</body>
</html>