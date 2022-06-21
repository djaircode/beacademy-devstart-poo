<?php
ini_set('display_errors', 1);

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$cpf = '123123123123';
$docX = '1234567890123';

$br = new ValidarBR();
$br->validarDocumento($cpf); 

$us = new ValidarUS();
$us->validarDocumento($docX);

echo 'Funcionou';