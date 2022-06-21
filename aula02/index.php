<?php

ini_set('display_errors',1);

include 'Produto.php';

$p1 = new Produto('Tênis para corrida',299);
$p2 = new Produto('Calça Jeans', 100);

var_dump($p1);
// var_dump($p2);