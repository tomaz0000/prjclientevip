<?php

$nome =$_GET["nome"];
$valor =$_GET["valor"];

$vip = $_GET ["vip"] ;



$valor = filter_input(INPUT_GET,"valor", FILTER_VALIDATE_FLOAT);

                   



if ($vip== "sim") {
     $desconto = $valor*0.10;
 $pagar = $valor-$desconto;
    
} else {
    $desconto =0;
    $pagar =$valor-$desconto;
}

 
$mensagemprincipal ="<p> nome é " . $nome.
 "<p> voce recebeu um desconto de  " .$desconto.

 "</p> total é   "  .$pagar

;



 echo$mensagemprincipal 
 ;

?>




