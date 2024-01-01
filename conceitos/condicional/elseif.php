<?php
date_default_timezone_set('America/Sao_Paulo');

$hora_atual = date("H");

if ($hora_atual < "06") {
    echo "Tenha Um Bom Dia!";
} elseif ($hora_atual < "12") {
    echo "Tenha Uma Boa Tarde!";
} else {
    echo "Tenha uma Boa Noite!";
}
?>