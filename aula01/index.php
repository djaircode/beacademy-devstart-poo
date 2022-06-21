<?php

ini_set('display_errors',1); //Mostrar erros que só são interessante ao DVE
/*OO é pra mim comO DEV ter controler maior sobre 
o meu código e no futuro bem distantes */

include 'Aluno.php';
include 'Curso.php';
include 'Professor.php';

$p1 = new Professor ('Djair S Almeida', '000.000.000-91', 10500.99);
$p2 = new Aluno ('Aristeu', '920.000.000-94');
$p3 = new Aluno ('Hermanoteu', '830.000.000-45');

var_dump($p1);
var_dump($p2);
var_dump($p3);
