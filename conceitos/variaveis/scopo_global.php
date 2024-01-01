<?php

$x = 25;
function minhaFunGlobal(){
  echo "A variavel x NÃO pode ser acessada aqui, seu valor é: $x" . PHP_EOL;
}
minhaFunGlobal();

echo "A variavel x PODE ser acessada aqui, seu valor é: $x";
