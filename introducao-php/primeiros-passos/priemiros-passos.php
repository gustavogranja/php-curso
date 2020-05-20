<?php

require_once 'php-avancado.php';

$contasCorrentes = [
    '05282562111' => [
        'titular' => 'Gustavo',
        'saldo' => 10000
    ],
    '02364356783' => [
        'titular' =>  'Guilherme',
        'saldo' => 9088
    ],
    '04887492318' => [ 
    'titular' => 'Geovana',
    'saldo' => 20399
    ]
];  

$contasCorrentes ['02364356783'] = sacar($contasCorrentes['02364356783'], 1000);
$contasCorrentes ['04887492318'] = sacar($contasCorrentes['04887492318'], 5000) ;

foreach ($contasCorrentes as $cpf => $conta) {
    exibemensagem ($cpf . " " . $conta ['titular'] . ' ' . $conta ['saldo']);
}

?>
