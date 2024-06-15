<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e HTML</title>
    
</head>
<body>

<?php
$indice = 0;

do {
    $corDeFundo = 'transparent';
     
    if (in_array($indice, [2, 6, 10])) {
        $corDeFundo = 'DodgerBlue'; 
    }    
    echo "<div style='background-color: $corDeFundo;'>Índice atual: $indice</div>";

    $indice++;
} while ($indice <= 12);
?>

</body>
</html>
