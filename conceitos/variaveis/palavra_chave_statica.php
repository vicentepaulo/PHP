<?php
function myTest()
{
    static $x = 0; // a variavel não sera excluida 

    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
