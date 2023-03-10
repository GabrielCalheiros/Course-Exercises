<?php

$conta1 = [
    'Nome' => 'Gabriel', 
    'Saldo' => 7575
];
$conta2 = [
    'Nome' => 'Pedro', 
    'Saldo' => 8686
];
$conta3 = [
    'Nome' => 'Victor', 
    'Saldo' => 9787
];
$contasCorrentes = [$conta1, $conta2, $conta3];

for($i=0;$i< count($contasCorrentes);$i++){
echo $contasCorrentes[$i] ['Nome'];
echo "\t".$contasCorrentes[$i] ['Saldo'].PHP_EOL;

}