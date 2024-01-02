<?php

require_once ('funcoes.php');
require_once('contas.php');

$contas[227842] = sacar($contas[227842], 100);

$contas[227843] = depositar($contas[227843], 101);

letraMaiuscula($contas[227842]);

foreach ($contas as $numero_conta => $conta) {

    exibeMsg("$numero_conta {$conta['titular']} {$conta['saldo']}");

}
exit();

?>