<?php

echo "SUA ALTURA ATUAL É: " . $altura = 1.70 . PHP_EOL;
echo "SEU PESO ATUAL É: " . $peso = 118 . PHP_EOL;

$seu_imc = round($peso / $altura ** 2, 1);

echo "SEU IMC ATUAL É: $seu_imc" . PHP_EOL;

if ($seu_imc < 18.5) {
    echo "RESULTADO: Abaixo do peso";

} elseif ($seu_imc > 18.5 AND $seu_imc < 24.9) {
    echo "RESULTADO: Peso normal";

} elseif ($seu_imc > 25 AND $seu_imc < 29.9) {
    echo "RESULTADO: Sobrepeso";

} elseif ($seu_imc > 30 AND $seu_imc < 34.9) {
    echo "RESULTADO: Obesidade grau 1";

} elseif ($seu_imc > 35 AND $seu_imc < 39.9) {
    echo "RESULTADO: Obesidade grau 2";

}elseif ($seu_imc > 40) {
    echo "RESULTADO: Obesidade grau 3";
}
