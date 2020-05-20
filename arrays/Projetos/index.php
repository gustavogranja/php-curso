<?php 

namespace Alura;

require 'autoload.php';

$correntistas = [
    'Gustavo',
    'Guilherme',
    'Arismar',
    'Geovana',
    'Maria'
];

$saldo = [
    5000,
    3000,
    4679,
    1234,
    9000
];

$relacionados = array_combine($correntistas, $saldo);

if (array_key_exists("Gustavo", $relacionados)) {
    echo "O Saldo do Gustavo é: {$relacionados["Gustavo"]}";
} else {
        echo "Não foi encontrado";
};

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";
?>