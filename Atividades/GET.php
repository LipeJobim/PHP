<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagens</title>
</head>
<body>

<?php

if (isset($_GET['msg'])) {
    $mensagem = $_GET['msg'];

    
    switch ($mensagem) {
        case '1':
            echo '<p>Sua sessão expirou, faça o login novamente.</p>';
            break;
        case '2':
            echo '<p>Você não possui permissão para acessar.</p>';
            break;
        default:
            echo '<p>Valor inválido para a mensagem.</p>';
            break;
    }
} else {
    echo '<p>Nenhuma mensagem fornecida.</p>';
}
?>

</body>
</html>
