<?php

# Uma variável declarada dentro de uma função possui um ESCOPO LOCAL e só pode ser acessada dentro dessa função

function minhaFunLocal()
{
    $x = 5; //ESCOPO LOCAL
    echo "A variavel x PODE ser acessada aqui, seu valor é: $x";
};

minhaFunLocal();

echo "A variavel x NÃO PODE ser acessada aqui, seu valor é: $x";
