<?php

function contarCaracteres($texto) {
    $quantidade = strlen($texto);
    return $quantidade;
}


$textoExemplo = "Olá, mundo!";


$resultado = contarCaracteres($textoExemplo);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Caracteres</title>
</head>
<body>

    <p>A string "<?php echo $textoExemplo; ?>" contém <?php echo $resultado; ?> caracteres.</p>

</body>
</html>
