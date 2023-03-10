<?php

$teste = 23;

echo gettype($teste);
echo "pular linha \n";
echo "\t dando tab".PHP_EOL;
$frase = "Golfinhos são do bem.".PHP_EOL;
echo str_replace("bem","mal",$frase);
echo substr($frase, 3, 3).PHP_EOL;
echo "Pulando linha com certeza".PHP_EOL;
echo "adicionando $teste variavel no meio da frase";