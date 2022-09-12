<?php

echo "<footer>";

echo "<p>Acessado por ".$_SERVER['REMOTE_ADDR']." em ".date('d/m/Y')."</p>";
echo "<p>Desenvovido por Jorge Harbes em 2022</p>";

echo "</footer>";

$banco->close();
?>