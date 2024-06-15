<?php


$meuNomeCompleto = "Seu Nome Completo";  


$partesNome = explode(" ", $meuNomeCompleto);


$primeiroNome = $partesNome[0];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação com Primeiro Nome</title>
</head>
<body>

    <p>Olá, <?php echo $primeiroNome; ?>!</p>

</body>
</html>
