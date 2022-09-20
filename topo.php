<?php

echo "<header>";

if (empty($_SESSION['user']))
    echo "<a href='user-login.php' style='margin:10px;'>Entrar</a>";
else{
    echo "Olá, <strong>".$_SESSION['nome']."</strong>! |  (usuário do tipo ".$_SESSION['tipo'].") ";
    echo "Meus Dados | "
    echo "<a href='user-logout.php'>Sair</a>";
}


echo "</header>";

?>