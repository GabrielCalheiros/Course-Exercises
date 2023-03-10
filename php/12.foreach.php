<?php

$conta1 = 
$conta2 = 
$conta3 = 
$contasCorrentes = [
    17625427730 => ['Nome' => 'Pedro', 'Saldo' => 8686],
    75369875547 => ['Nome' => 'Victor', 'Saldo' => 9787], 
    26875491130 => ['Nome' => 'Gabriel', 'Saldo' => 7575]
];

echo "----------------------------------".PHP_EOL;
foreach ($contasCorrentes as $cpf => $conta){
echo $cpf."\t".$conta['Nome'].PHP_EOL.$conta['Saldo'];
}