<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta ['saldo']) {
        exibeMensagem ("Saldo insuficiente.");
    } 
    else {
        $conta ['saldo'] -= $valorASacar;
    }
    return $conta;
} 

function exibeMensagem ($mensagem)
{
    echo $mensagem . PHP_EOL;
}

?>