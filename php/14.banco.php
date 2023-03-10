<?php
require_once '15.banco_funções.php';


$contasCorrentes = [
    17625427730 => ['Nome' => 'Pedro', 'Saldo' => 1000],
    75369875547 => ['Nome' => 'Victor', 'Saldo' => 1000], 
    26875491130 => ['Nome' => 'Gabriel', 'Saldo' => 1000],
    25479685521 => ['Nome' => 'Marcos','Saldo' => 1000]];

    $logon = false;

    while($menu = true){

        if($logon == false){
            while($logon == false){
                listar_contas($contasCorrentes);
                $conta = readline("Qual CPF deseja acessar?");
                if(array_key_exists($conta, $contasCorrentes)){
                $logon = true;
                echo"Cadastro efeituado na conta de ".$contasCorrentes[$conta]['Nome'];
                }else{
                    echo "CPF incorreto, tente novamente.";
                    system('clear');
                }
            }
        }
        listar_conta($contasCorrentes[$conta]);
        echo "1. Adicionar Conta".PHP_EOL."2.Remover Conta".PHP_EOL."3.Saque".PHP_EOL."4.Deposito".PHP_EOL."5.LogOff".PHP_EOL;
        $action = readline("Digite o valor correspondente a ação que deseja executar:");

        if($action == 1){$contasCorrentes = adicionar_conta(contasCorrentes:$contasCorrentes);}
        if($action == 2){$contasCorrentes = remover_conta(conta: $conta, contasCorrentes: $contasCorrentes);$logon = false;}
        if($action == 3){$contasCorrentes[$conta] = sacar_saldo(conta: $contasCorrentes[$conta]);}
        if($action == 4){$contasCorrentes[$conta] = depositar_saldo(conta: $contasCorrentes[$conta]);}
        if($action == 5){$logon = false;}
        system('clear');
    }


    
    
    
    // halftone effect
    // Over 100 documentaries and videos about WW2, National Socialism, and Hitler magnet:?xt=urn:btih:D0207A73F78FB62306A7CF84C5BECCB20C6332B0&dn=natsoc%20videos%20-%20backup.rar&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80%2fannounce&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80&tr=udp%3a%2f%2ftracker.publicbt.com%3a80&tr=udp%3a%2f%2ftracker.istole.it%3a80%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80&tr=udp%3a%2f%2fopen.demonii.com%3a1337 William L Pierce video collection: magnet:?xt=urn:btih:0607FD470BF6519BEDB03F3755CEEC169913F385&dn=William%20L%20Pierce%20Video%20Archive.rar&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.publicbt.com%3a80%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80%2fannounce&tr=udp%3a%2f%2fopen.demonii.com%3a1337 Adolf Hitler and Nazism - Collection of Books and Speeches magnet:?xt=urn:btih:BB77EF149B595D7BD5AC64561FF834C4F3C2F084&dn=Adolf%20Hitler%20and%20Nazism%20-%20Collection%20of%20Books%20and%20Speeches&tr=udp%3a%2f%2ftracker.openbittorrent.com%3a80&tr=udp%3a%2f%2fopen.demonii.com%3a1337&tr=udp%3a%2f%2ftracker.publicbt.com%3a80&tr=udp%3a%2f%2ftracker.istole.it%3a80%2fannounce&tr=udp%3a%2f%2ftracker.ccc.de%3a80
