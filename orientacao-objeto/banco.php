<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco('Goiânia', 'Gentil', 'Candido', '12');
$Gustavo = new Titular(new CPF('123.456.789-10'), 'Gustavo', $endereco);
$primeiraConta = new Conta($Gustavo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$Guilherme = new Titular(new CPF('698.549.548-10'), 'Guilherme', $endereco);
$segundaConta = new Conta($Guilherme);
var_dump($segundaConta);

$Geovana = new Conta(new Titular(new CPF('123.654.789-01'), 'Geovana', $endereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas() . PHP_EOL;

?>
