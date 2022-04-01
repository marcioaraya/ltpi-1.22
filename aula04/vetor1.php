<?php
/* 
Defina um vetor para armazenar o nome e curso
de quatro pessoas:
Isaac     - ADS
Murilo    - BD
Enzo      - BD
Guilherme - ADS
*/

$alunos[0]["Isaac"] = "ADS";
$alunos[1]["Murilo"] = "BD";
$alunos[2]["Enzo"] = "BD";
$alunos[3]["Guilherme"] = "ADS";
  
var_dump($alunos);

$alunos["Isaac"] = "ADS";
$alunos["Murilo"] = "BD";
$alunos["Enzo"] = "BD";
$alunos["Guilherme"] = "ADS";
  
var_dump($alunos);
  
$alunos[0]["nome"]= "Isaac";
$alunos[0]["curso"]= "ADS";
$alunos[1]["nome"]= "Murilo";
$alunos[1]["curso"]= "BD";
$alunos[2]["nome"]= "Enzo"
$alunos[2]["curso"]="BD";
$alunos[3]["nome"]= "Guilherme"
$alunos[3]["curso"]="ADS";

var_dump($alunos);