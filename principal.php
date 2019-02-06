<?php
    $msgTitulo = $msgTxt = '';
    function msg($msg, $titulo='Sucesso!') {
        global $msgTitulo, $msgTxt;
        
        $msgTitulo = $titulo;
        $msgTxt    = $msg;
    }
    
    calculaDados();
?>