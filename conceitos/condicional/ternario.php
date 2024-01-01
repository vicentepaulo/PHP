<?php
date_default_timezone_set('America/Sao_Paulo');

$hora_atual = date("H");

$horario_abertura = 8;
$horario_fechamento = 18;

$b = (($hora_atual >= $horario_fechamento) or ($hora_atual <= $horario_abertura)) ? "Fechado" : "Aberto";

echo $b;