<?php

include ('Aluno.php');
include ('Professor.php');
include ('Curso.php');

$a1 = new Aluno();
$a1->nome = 'Renato';
$a1->cpf = '123456789-10';
$a1->nome .= ' Matsuo';

$cursoPHP = new Curso;
$cursoPHP->nome = 'Introdução ao PHP';
$cursoPHP->cargaHoraria = 88;
$cursoPHP->descricao = 'Aprender básico do PHP.';

echo "<h1>O nome do aluno é: {$a1->nome}</h1>.";
