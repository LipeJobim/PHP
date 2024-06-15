<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutas</title>
</head>
<body>

<select name="frutas" id="frutas">
    <?php
    
    $frutas = array("Maçã", "Banana", "Laranja", "Morango", "Uva", "Pera");

    
    foreach ($frutas as $fruta) {
        echo "<option value='$fruta'>$fruta</option>";
    }
    ?>
</select>

</body>
</html>
