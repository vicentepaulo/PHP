<?php

$contas = [
    227841 => [
        "titular" => "Luna",
        "saldo" => 1000,
    ],
    227842 => [
        "titular" => "Bibi",
        "saldo" => 1000,
    ],
    227843 => [
        "titular" => "Babalhu",
        "saldo" => 1000,
    ]
];

$contas[227844] = [
    "titular" => "Vicente",
    "saldo" => 1000000,
];

foreach ($contas as $numero_conta => $conta) {

    if ($numero_conta == 227844) {
        echo $conta['titular'] . PHP_EOL;
    }

}

?>