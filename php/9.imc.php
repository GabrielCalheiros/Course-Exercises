<?php
$peso = 70;
$altura = 1.87;
$imc = $peso/($altura**2);
echo $imc.PHP_EOL;
//normal = 20-25

if($imc >= 20 and $imc <=25){
    echo "IMC perto do ideal.".PHP_EOL;
}else{
    if($imc <20){
    echo "IMC abaixo do ideal.".PHP_EOL;
    }
    else{
        echo"IMC acima do ideal.".PHP_EOL;
    }
}