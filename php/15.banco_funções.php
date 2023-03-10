<?php

function listar_contas(array $contas): array{
    echo "----------------------------------".PHP_EOL;
    foreach ($contas as $cpf => $conta){
    echo $cpf."\t".$conta['Nome']."\t".$conta['Saldo'].PHP_EOL;
    }return $contas;}

    function listar_conta(array $conta): array{
        echo $conta."\t".$conta['Nome']."\t".$conta['Saldo'].PHP_EOL;
        return $conta;}

function sacar_saldo(array $conta): array{
    $saque = readline("Quanto deseja sacar?");
    if($saque<$conta['Saldo']){
    $conta['Saldo'] = $conta['Saldo']-$saque;
    echo "Saque de: ".$saque." realisado com sucesso!".PHP_EOL;
    echo "Seu saldo é de ".$conta['Saldo'].PHP_EOL;
    }else{
    echo "Seu saldo é de ".$conta['Saldo'].", portanto insuficiente para tal saque.".PHP_EOL;}
    return $conta;
    }

function depositar_saldo(array $conta): array{
    $deposito = readline("Quanto deseja depositar?");
    $conta['Saldo'] = $conta['Saldo']+$deposito;
    echo "Deposito de: ".$deposito." realisado com sucesso!".PHP_EOL;
    echo "Seu saldo é de ".$conta['Saldo'].PHP_EOL;
    return $conta;
}

function adicionar_conta(array $contasCorrentes): array{
    $nome = readline("Qual o nome da conta nova?");
    $cpf = readline("CPF?");
    $saldo = readline("Saldo?");
    $contasCorrentes[] = ['Nome' => $nome,'Saldo' => $saldo];
    return $contasCorrentes;
}

function remover_conta($conta, array $contasCorrentes): array{
    unset ($contasCorrentes[$conta]);
    echo "Conta Removida com sucesso!";
    return $contasCorrentes;
}
