<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umdiretor = new Diretor('Nara do Valle', new CPF('977.435.231-00'), '10000');

$autenticador->tentaLogin($umdiretor, '1234') . PHP_EOL;

?>