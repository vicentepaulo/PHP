<?php 

function depositar($conta, $valorDepositado){

    if($valorDepositado < 0){
        exibeMsg("Depositos precisam ser positivos");

    }else{
        $conta['saldo'] += $valorDepositado;

    }

    return $conta;

}

function sacar(array $conta, float $valorSacado): array{

    if ($valorSacado > $conta['saldo']) {
        exibeMsg("Saldo Insuficiente na conta");

    } else {
        $conta['saldo'] -= $valorSacado;

    }
    return $conta;
}

function exibeMsg($msg){

    echo $msg . PHP_EOL;

}

function letraMaiuscula(array &$conta){

    $conta['titular'] = strtoupper($conta['titular']);
}

?>