<?php

$x = 25;
function minhaFunGlobal(){
  global $x; // palavra chave 'global' foi chamada junto com a variavel e agora pode ser acessada
  echo "A variavel x PODE ser acessada aqui, seu valor é: $x" . PHP_EOL;
}
minhaFunGlobal();

echo "A variavel x PODE ser acessada aqui, seu valor é: $x";