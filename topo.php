<?php

echo "<header style='padding: 10px;'>";

if (empty($_SESSION['user']))
    echo "<a href='user-login.php'>Entrar</a>";
else{
    echo "Olá, <strong>".$_SESSION['nome']."</strong>! |  (usuário do tipo <strong>".$_SESSION['tipo']."</strong>) ";
    echo "Meus Dados | ";
    if (isAdmin()){
        echo " Novo Usuário |";
        echo " Novo Jogo |";
    }
    echo " <a href='user-logout.php'>Sair</a>";
}


echo "</header>";

?>