<?php

$nome=$_GET["nome"];
$valor=$_GET["valor"];


// $vip = filter_input(INPUT_GET,"vip", FILTER_VALIDATE_FLOAT);

$valor = filter_input(INPUT_GET,"valor", FILTER_VALIDATE_FLOAT);


// tive dificuldades em verificar minha variavel 
 $desconto = $valor*0.10;
 $pagar = $valor-$desconto;
 echo$pagar;






