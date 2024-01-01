<?php

$peso_maximo = 500;

$peso_veiculo = 600;

if ($peso_veiculo > $peso_maximo) {
    echo "ACESSO NEGADO" . PHP_EOL;

} else {
    echo "ACESSO AUTORIZADO" . PHP_EOL;
}
