<?php
    function thumb($arq){
        $caminho="fotos/$arq";
        if (is_null($arq) || !file_exists($caminho))
            return "fotos/indisponivel.png";
        else
            return $caminho;
    }

    function voltar(){
        return "<a href='index.php'><img src='icones/icoback.png' alt='Voltar'></a>";
    }

    function msgSucesso(){

    }

    function msgAviso(){

    }

    function msgErro(){
        
    }
?>