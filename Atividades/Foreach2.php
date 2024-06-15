<?php

$frutas = [
    1 => 'Maçã',
    2 => 'Banana',
    3 => 'Uva',
    4 => 'Morango',
    5 => 'Abacaxi'
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibindo Frutas com foreach</title>
</head>
<body>

    <select name="frutas">
        <?php foreach ($frutas as $key => $fruta): ?>
            <option value="<?php echo $key; ?>"><?php echo $fruta; ?></option>
        <?php endforeach; ?>
    </select>

</body>
</html>
