<?php

include 'Produto.php';

$p1 = new Produto;
//$p1->nome = 'Tênis';
//$p1->valor = 299;

//$p2 = new Produto;
//$p2->nome = 'Calça Jeans';
//$p2->valor = -150;

$p1->setNome('Tênis de corrida');
$p1->setValor(299);

echo $p1->getNome();
echo $p1->getValor();
