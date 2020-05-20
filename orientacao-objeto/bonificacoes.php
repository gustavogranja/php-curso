<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Gerente;

$umFuncionario = new Desenvolvedor('Gustavo Granja', new CPF('052.825.621-11'),'1500');

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente('Geovana Granja', new CPF('052.825.789-21'),'2500');

$umDiretor = new Diretor('Maria Helena Granja', new CPF('023.825.721-21'),'7500');

$umEditor = new EditorVideo('Arismar Marcal', new CPF('765.825.321-99'),'1500');

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal() . PHP_EOL;

?>