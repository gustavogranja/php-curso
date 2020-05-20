<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedades
{

    public function __get(string $nameAtributo)
    {
    $metodo = 'recupera' . ucfirst($nameAtributo);
    return $this->$metodo();
    }

}

?>