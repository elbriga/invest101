<?php
    require_once('dados.php');
    require_once('funcoes.php');
    require_once('principal.php');
    
    $idAtivo = isset($_REQUEST['ativo']) ? $_REQUEST['ativo']+0 : 0;
    
    $_titulo = 'Ativos';
    
    require_once('tpl_head.php');
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title"><?=$ativos[$idAtivo]['nome']?></strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    	<th scope="col"></th>
                        <th scope="col">Ativo</th>
                        <th scope="col">Montante</th>
                        <th scope="col">% Carteira</th>
                        <th scope="col">% Grupo</th>
                        <th scope="col">Rentabilidade</th>
                    </tr>
                </thead>
                <tbody>
<?php
foreach ($ativos as $idAtivo => $dadosAtivo) {
        if($dadosAtivo['grupo'] != $idGrupo) continue;
        $sigla = isset($dadosAtivo['sigla']) ? "($dadosAtivo[sigla]) " : '';
?>
                    <tr>
                        <th scope="row"><a href="/ativo.php?id=<?=$idAtivo?>"><i class="menu-icon fa fa-laptop"></i></a></th>
                        <th><?=$sigla.$dadosAtivo['nome']?></th>
                        <td>R$ <?=$dadosAtivo['montante']?></td>
                        <td>? %</td>
                        <td>? %</td>
                        <td>? %</td>
                    </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    require_once('tpl_foot.php');
?>