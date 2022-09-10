<?php

$banco=new mysqli("localhost","root","","bd_games");
if ($banco->connect_errno){
    echo "<h2>Encontrei um erro $banco->errno --> $banco->connect_error</h2>";
    die();
}

$banco->query("set names 'utf-8'");
$banco->query("set character_set_connection=utf8");
$banco->query("set character_set_cliente=utf8");
$banco->query("SET character_set_results=utf8");

$busca=$banco->query("select * from generos");
if (!$busca)
    echo "<h2>Falha na busca! $banco->error</h2>";
else{
    while ($reg=$busca->fetch_object()){
        print_r($reg);print "<br>";
    }
}
?>