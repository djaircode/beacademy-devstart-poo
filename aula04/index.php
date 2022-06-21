<?php

ini_set('display_errors', 1); 

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';
include 'GestorGeral.php';
include 'ClienteVip.php';
include 'Validar.php';

$c1 = new Cliente('chiquim@email.com','123456');
$c1->setNome ('Chiquim');
$c1->setDataCadastro('01/01/2019');

$cpf = '123456789';

$validador = new Validar();
$validador->validarCpf($cpf);

$c1->setCpf($cpf);

/* TOGGLE BLOCK COMMENT = SHIFT + ALT + A  */
$g1 = new Gestor('zezim@email.com','chico',6000);
$g1->setNome ('Zezim');

$gg1 = new GestorGeral('maria@email.com', '1q2w3w', 9000);

//$us = new Usuario('hacker@email.com','11111');

$clienteVip = new ClienteVip('cliente@email.com', '123123');

var_dump($c1);
var_dump($g1);
var_dump($gg1);
var_dump($clienteVip);
