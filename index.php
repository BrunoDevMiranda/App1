<?php

require_once 'autoload.php';


$aluno = new Aluno();
$aluno->cadastro("Bruno",35,"1.80",75);

$professor = new Professor();
$professor->cadastro("Jiraya",78,1001);

$treino = new Treino();
$treino->cadastro("Tricps","Barra curta","Três de 10","18kg");


$result = new Resultado();
$result->cadastro($treino,$aluno,$professor);

echo $result->printTela();