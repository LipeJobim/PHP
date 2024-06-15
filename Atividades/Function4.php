<?php

function reajustarSalario($salario) {
    $novoSalario = $salario * 1.05; 
    return $novoSalario;
}


$salarioInicial = 2000.00;


$novoSalario = reajustarSalario($salarioInicial);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Salário</title>
</head>
<body>

    <h1>O novo salário reajustado é: R$ <?php echo number_format($novoSalario, 2, ',', '.'); ?></h1>

</body>
</html>
