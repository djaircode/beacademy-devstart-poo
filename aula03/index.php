<?php

ini_set('display_errors',1);

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupa','Roupas Unisex');
$c2 = new Categoria('Roupas de Banho', 'toalha para rosto, etc');
$c3 = new Categoria('Calçados','Calçados em geral');


$p1 = new Produto('Tenis', 299, 'Melhor tenis para Bilus', $c3);
// $p1->getNome ('Tênis para corrida');
// $p1->getValor(299); 

echo '<br/><br/>';
$p2 = new Produto('Saia Jeans', 100, 'Saia para Wolf', $c1);
// $p2->setCategoria($c2); não vai funcionar pq Ctegoria é apenas para leitura
// $p2->setNome ('Calça Jeans');
// $p2->setValor(100);

$p3 = new Produto('Calça Branca', 299.90, 'Calça para Cavalos', $c1);
// $p3->setNome ('Calça Branca');

var_dump($p1);
var_dump($p2);
var_dump($p3); 
