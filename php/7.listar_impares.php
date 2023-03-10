<?php
for($contador=1;$contador<100;$contador++){
    $resto = $contador % 2;
    if($resto == 1){
        echo "#$contador é ímpar".PHP_EOL;
    }
}