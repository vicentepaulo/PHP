<?php

$conta1 = [
    "titular" => "Luna",
    "saldo" => 1000,
];

$conta2 = [
    "titular" => "Bibi",
    "saldo" => 1000,
];

$conta3 = [
    "titular" => "Babalhu",
    "saldo" => 1000,
];

$contas = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contas); $i++) {
    echo $contas[$i]['saldo'] . PHP_EOL;
}

?>