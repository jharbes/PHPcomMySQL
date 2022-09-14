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

    function msgSucesso($msg){
        $resp="<div class='sucesso' style='padding: 7px 15px; margin-bottom: 15px; border-radius: 15px; background-color: rgb(226,239,218); color: rgb(74,116,67);'><span class='material-symbols-outlined'>
        check_circle</span> $msg</div>";
        return $resp;
    }

    function msgAviso($msg){
        $resp="<div class='aviso' style='padding: 7px 15px; margin-bottom: 15px; border-radius: 15px; background-color: rgb(251,248,229); color: rgb(134,110,66);'><span class='material-symbols-outlined'>
        info</span> $msg</div>";
        return $resp;
    }

    function msgErro($msg){
        $resp="<div class='erro' style='padding: 7px 15px; margin-bottom: 15px; border-radius: 15px; background-color: rgb(239,223,222); color: rgb(157,75,69);'><span class='material-symbols-outlined'>
        error</span> $msg</div>";
        return $resp;
    }
?>