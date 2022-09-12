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
require_once 'includes/funcoes.php';
$ordem=$_GET['o']??"n";
?>
<div id="corpo">
    <?php
    include_once 'topo.php';
    ?>
    <h1>Escolha seu Jogo</h1>
    <form id="busca" action="index.php" method="get">
        Ordernar: 
        <a href="index.php?o=n">Nome</a> | 
        <a href="index.php?o=p">Produtora</a> | 
        <a href="index.php?o=n1">Nota Alta</a> | 
        <a href="index.php?o=n2">Nota Baixa</a> | 
       <label for="ibusca">Buscar: </label><input type="text" name="c" size="10" maxlength="40" id="ibusca">
    </form>
    <table class="listagem">
        <?php
        /*
            $q="select * from jogos j join generos g on j.genero=g.cod";
        */
            $q="select j.cod, j.nome, g.genero, p.produtora, j.capa from jogos j join generos g on j.genero=g.cod join produtoras p on j.produtora=p.cod ";

            switch ($ordem){
                case "p":
                    $q.="order by p.produtora";
                    break;
                case "n1":
                    $q.="order by j.nota desc";
                    break;
                case "n2":
                    $q.="order by j.nota asc";
                    break;
                default:
                    $q.="order by j.nome";
            }
            $busca=$banco->query($q);
            if (!$busca)
                echo "<tr><td>Infelizmente a busca deu erro!</tr></td>";
            else{
                if ($busca->num_rows==0)
                    echo "<tr><td>Nenhum registro encontrado!</tr></td>";
                else{
                    while($reg=$busca->fetch_object()){
                        $t=thumb($reg->capa);
                        echo "<tr><td><img src='$t' class='mini'/>";
                        echo "<td><a href='detalhes.php?cod=$reg->cod'>$reg->nome</a>";
                        echo " [$reg->genero]";
                        echo "<br>$reg->produtora";
                        echo "<td>Adm";
                    }
                }
            }
        ?>
    </table>
</div>
<?php
include_once 'rodape.php';
?>
</body>
</html>