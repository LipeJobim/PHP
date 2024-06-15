<?php

//1
$nome= "Felipe";
$idade="22";
$usuario= $idade;


If($usuario >= 18){
    echo 'Olá '.$nome.', você pode participar do projeto';
     }else{
     echo 'Olá '.$nome.', você não pode participar do projeto';
     }

//2
$salario = 1900.00; 
$reajuste = 0; 


if ($salario < 1200.00) {
    $reajuste = 300.00;
} elseif ($salario >= 1200.00 && $salario < 1600.00) {
    $reajuste = 250.00;
} elseif ($salario >= 1600.00) {
    $reajuste = 200.00;
}

$salarioComReajuste = $salario + $reajuste;

echo "O salário com reajuste é R$ " . number_format($salarioComReajuste, 2, ',', '.');

?>
