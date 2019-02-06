<?php
    $ativos_grupos = [
        1 => [ 'nome' => 'Titulos Públicos',    'ico' => 'menu-icon fa fa-laptop', 'cor' => 'bg-success' ],
        2 => [ 'nome' => 'Ações',               'ico' => 'menu-icon fa fa-table',  'cor' => 'bg-info' ],
        3 => [ 'nome' => 'Fundos Imobiliários', 'ico' => 'menu-icon fa fa-th',     'cor' => 'bg-warning' ],
    ];
    
    $ativos = [
         1 => [ 'grupo' => 1, 'nome' => 'Tesouro Selic 2025',                          'montante' => 1688.84 ],
         2 => [ 'grupo' => 1, 'nome' => 'Tesouro IPCA + com juros semestrais 2026',    'montante' => 1633.91 ],
         3 => [ 'grupo' => 1, 'nome' => 'Tesouro IPCA + com juros semestrais 2035',    'montante' => 1603.65 ],
         4 => [ 'grupo' => 1, 'nome' => 'Tesouro Prefixado com juros semestrais 2029', 'montante' => 1604.17 ],
        
         5 => [ 'grupo' => 2, 'sigla' => 'ABEV3',  'nome' => 'Ambev',              'montante' => 199.98 ],
         6 => [ 'grupo' => 2, 'sigla' => 'BBSE3',  'nome' => 'BB Seguridade',      'montante' => 212.66 ],
         7 => [ 'grupo' => 2, 'sigla' => 'BRSR6',  'nome' => 'Banrisul',           'montante' => 189.28 ],
         8 => [ 'grupo' => 2, 'sigla' => 'ENBR3',  'nome' => 'Energias do Brasil', 'montante' => 202.68 ],
         9 => [ 'grupo' => 2, 'sigla' => 'HGTX3',  'nome' => 'Hering',             'montante' => 193.14 ],
        11 => [ 'grupo' => 2, 'sigla' => 'HYPE3',  'nome' => 'Hypera Pharma',      'montante' => 188.04 ],
        12 => [ 'grupo' => 2, 'sigla' => 'ITUB4',  'nome' => 'Itaú',               'montante' => 219.60 ],
        13 => [ 'grupo' => 2, 'sigla' => 'QUAL3',  'nome' => 'Qualicorp',          'montante' => 193.44 ],
        14 => [ 'grupo' => 2, 'sigla' => 'SAPR11', 'nome' => 'Sanepar',            'montante' => 301.20 ],
        15 => [ 'grupo' => 2, 'sigla' => 'VIVT4',  'nome' => 'Telefônica (VIVO)',  'montante' => 190.88 ],
        
        16 => [ 'grupo' => 3, 'sigla' => 'ABCP11', 'nome' => 'Grand Plaza',             'montante' => 188.80 ],
        17 => [ 'grupo' => 3, 'sigla' => 'BRCR11', 'nome' => 'BC Fund',                 'montante' => 103.69 ],
        18 => [ 'grupo' => 3, 'sigla' => 'HGLG11', 'nome' => 'CSHG Logistica',          'montante' => 145.70 ],
        19 => [ 'grupo' => 3, 'sigla' => 'HGRE11', 'nome' => 'HG Real Estate',          'montante' => 144.95 ],
        20 => [ 'grupo' => 3, 'sigla' => 'JSRE11', 'nome' => 'JS Real Estate',          'montante' => 105.80 ],
        21 => [ 'grupo' => 3, 'sigla' => 'KNCR11', 'nome' => 'Kinea Rendimentos',       'montante' => 104.89 ],
        22 => [ 'grupo' => 3, 'sigla' => 'KNRI11', 'nome' => 'Kinea Renda Imobiliária', 'montante' => 151.50 ],
        23 => [ 'grupo' => 3, 'sigla' => 'MALL11', 'nome' => 'Malls Br Plural',         'montante' => 107.49 ],
        24 => [ 'grupo' => 3, 'sigla' => 'RBRR11', 'nome' => 'High Grade',              'montante' => 109.00 ],
        25 => [ 'grupo' => 3, 'sigla' => 'VISC11', 'nome' => 'Vinci Shop Centers',      'montante' => 107.19 ],
        26 => [ 'grupo' => 3, 'sigla' => 'XPML11', 'nome' => 'XP Malls',                'montante' => 105.10 ],
        27 => [ 'grupo' => 3, 'sigla' => 'TRXL11', 'nome' => 'TRX Realty Logística',    'montante' => 0 ],
    ];
    
    $posicao = [
        [ 'ativo' => 1, 'mes' => '201901', 'vfimmes' => 1632, 'aporte' => 1630 ],
        [ 'ativo' => 1, 'mes' => '201902', 'vfimmes' => 1730 ],
    ];
?>