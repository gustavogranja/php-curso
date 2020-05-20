<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('052.825.621-11'),
        'Gustavo Granja',
        new Endereco('Goiania', 'Gentil meireles', 'Candido Portinari', '100')
    )
);

try{
$contaCorrente->deposita(-100) . PHP_EOL;
} catch (InvalidArgumentException $exception) {
    echo "Valro a depositar precisa ser positivo" . PHP_EOL;
}