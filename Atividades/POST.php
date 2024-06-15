<?php


$estados = [
    'AC' => 'Acre',
    'AL' => 'Alagoas',
    'AP' => 'Amapá',
    'AM' => 'Amazonas',
    'BA' => 'Bahia',
    'CE' => 'Ceará',
    'DF' => 'Distrito Federal',
    'ES' => 'Espírito Santo',
    'GO' => 'Goiás',
    'MA' => 'Maranhão',
    'MT' => 'Mato Grosso',
    'MS' => 'Mato Grosso do Sul',
    'MG' => 'Minas Gerais',
    'PA' => 'Pará',
    'PB' => 'Paraíba',
    'PR' => 'Paraná',
    'PE' => 'Pernambuco',
    'PI' => 'Piauí',
    'RJ' => 'Rio de Janeiro',
    'RN' => 'Rio Grande do Norte',
    'RS' => 'Rio Grande do Sul',
    'RO' => 'Rondônia',
    'RR' => 'Roraima',
    'SC' => 'Santa Catarina',
    'SP' => 'São Paulo',
    'SE' => 'Sergipe',
    'TO' => 'Tocantins'
];


$nome = '';
$estado = '';
$resultado = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

    
    if (strlen($nome) > 5 && strlen($nome) < 100) {
     
        if (array_key_exists($estado, $estados)) {
            $resultado = $estados[$estado];
        } else {
            $resultado = 'Estado não encontrado';
        }
    } else {
        $resultado = 'O nome deve ter mais de 5 caracteres e menos que 100 caracteres.';
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
</head>
<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" required><br><br>

        <label for="estado">Estado:</label>
        <select id="estado" name="estado">
            <?php foreach ($estados as $sigla => $nomeEstado): ?>
                <option value="<?php echo $sigla; ?>" <?php echo ($estado == $sigla) ? 'selected' : ''; ?>><?php echo $nomeEstado; ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php if ($resultado): ?>
        <h2>Resultado:</h2>
        <p><?php echo $resultado; ?></p>
    <?php endif; ?>

</body>
</html>
