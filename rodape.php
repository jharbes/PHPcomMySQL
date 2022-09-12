<?php

echo "<footer>";

echo "<p>Acessado por <strong>".$_SERVER['REMOTE_ADDR']."</strong> em <strong>".date('d/m/Y')."</strong></p>";
echo "<p>Desenvolvido por <strong><a href='mailto:jharbes@hotmail.com'>Jorge Harbes</a></strong> em 2022</p>";
echo "<p>

<a href='https://www.linkedin.com/in/jorge-harbes-0664161a7/' target='_blank'><img class='redes-sociais' src='imagens/256x256bb.png' alt='LinkedIn'></a>

<a href='https://github.com/jharbes/' target='_blank'><img class='redes-sociais' src='imagens/logo-github.jpg' alt='GitHub'></a></p>";

echo "</footer>";

$banco->close();
?>