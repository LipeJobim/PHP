<?php


$meuNome = "Seu Nome Completo";


$nomeAlterado = str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '@', $meuNome);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substituição de Vogais</title>
</head>
<body>

    <p>Nome original: <?php echo $meuNome; ?></p>
    <p>Nome com vogais substituídas por "@": <?php echo $nomeAlterado; ?></p>

</body>
</html>
