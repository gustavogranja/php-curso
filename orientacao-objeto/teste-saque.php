<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\SaldoInsuficienteException;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('052.825.621-11'),
        'Gustavo Granja',
        new Endereco('Goiania', 'Gentil meireles', 'Candido Portinari', '100')
    )
);
$conta->deposita(500);

try{
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception){
    echo "Você, não tem saldo para realizar este saque" . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;
}

echo $conta->recuperaSaldo() . PHP_EOL;

?>
