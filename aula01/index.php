<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$p1 = new Professor();
$p1->nome = 'Alessandro';
$p1->cpf = '123456789-50';
$p1->salario = 1500;

echo "O meu professor se chama {$p1->nome}, o CPF dele é: {$p1->cpf} e seu salário é de R$ {$p1->salario} reais.";
