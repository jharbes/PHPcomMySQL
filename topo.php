<?php

echo "<header>";

if (empty($_SESSION['user']))
    echo "<a href='user-login.php' style='margin:10px;'>Entrar</a>";
else
    echo "Olá, ".$_SESSION['nome'];

echo "</header>";

?>