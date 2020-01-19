<?php

$nome="Leilson";
 //echo "Olá ".$nome ." seja bem vindo ao meu site!!!";

$pessoa = array();

array_push($pessoa, array('Nome' => "cleiilsona", 'idade'=>"35"));
array_push($pessoa, array('Nome' => "val", 'idade'=>"35"));

//rint_r("Nome: ".$pessoa[1]['Nome'] . " idade: ".$pessoa[1]['idade']);



//print_r(json_encode($pessoa));
$arrayPessoas = json_decode('[{"Nome":"cleiilsona","idade":"35"},{"Nome":"val","idade":"35"}]');
print_r($arrayPessoas);


?>