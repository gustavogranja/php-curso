<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Goiania', 'Gentil meirelles', 'Candido portinari','100');
$outroEndereco = new Endereco('Brasilia', 'Vicente pires', 'Rua 10', '126');

echo $umEndereco->cidade . PHP_EOL;

exit();

echo $outroEndereco . PHP_EOL;
echo $umEndereco . PHP_EOL;


?>