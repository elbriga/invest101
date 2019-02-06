<?php
    function calculaDados() {
        global $ativos, $ativos_grupos;
        $total = 0;
        foreach ($ativos as $dadosAtivo) {
            $total += $dadosAtivo['montante'];
        }
        
        foreach ($ativos_grupos as $idGrupo => &$dadosGrupo) {
            $dadosGrupo['montante'] = 0;
            foreach ($ativos as $dadosAtivo) {
                if($dadosAtivo['grupo'] == $idGrupo) {
                    $dadosGrupo['montante'] += $dadosAtivo['montante'];
                }
            }
            $dadosGrupo['porc'] = round($dadosGrupo['montante'] / $total * 100);
        }
    }
?>