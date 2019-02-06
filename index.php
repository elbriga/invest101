<?php
    require_once('dados.php');
    require_once('funcoes.php');
    require_once('principal.php');
    
    msg('Aqui vai um aviso');
    
    $_titulo = 'Dashboard';
    
    require_once('tpl_head.php');
?>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">Traffic</h4>
                                <div class="small text-muted">October 2017</div>
                            </div>
                        </div>
                        <!--/.row-->
                        <div class="chart-wrapper mt-4">
                            <canvas id="trafficChart" style="height:50px;" height="50"></canvas>
                        </div>

                    </div>
                    <div class="card-footer">
                        <ul>
<?php
foreach ($ativos_grupos as $idGrupo => $dadosGrupo) {
?>
                            <li>
                                <div class="text-muted"><?=$dadosGrupo['nome']?></div>
                                <strong>R$ <?=$dadosGrupo['montante']?> (<?=$dadosGrupo['porc']?>%)</strong>
                                <div class="progress progress-xs mt-2" style="height: 5px;">
                                    <div class="progress-bar <?=$dadosGrupo['cor']?>" role="progressbar" style="width: <?=$dadosGrupo['porc']?>%;" aria-valuenow="<?=$dadosGrupo['porc']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
<?php
    require_once('tpl_foot.php');
?>