<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

//Instanciando - Crianda um objeto a partir de uma forma
$a1 = new Aluno(); //objeto do tipo Aluno
$a1->nome = 'Alessandro';
$a1->cpf = '123.123.123-12';

$cursoPHP = new Curso();
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHorária = 88; 
$cursoPHP->descricao = 'Aprendero básico e intermediario do PHP';


echo "<h1>Aluno: {$a1->nome}</h1>";