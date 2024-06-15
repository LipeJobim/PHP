<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For em PHP e HTML</title>
</head>
<body>

    <ul>
        <?php
        for ($indice = 0; $indice <= 20; $indice++) {
            $valor = $indice * 30;
            echo "<li>Índice $indice: $valor</li>";
        }
        ?>
    </ul>

</body>
</html>
