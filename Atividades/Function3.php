<?php

function exibirValoresArray($array) {
    foreach ($array as $valor) {
        echo $valor . "<br>";
    }
}

// Testando a função
$meuArray = ['Maçã', 'Banana', 'Uva', 'Morango', 'Abacaxi'];

exibirValoresArray($meuArray);

?>
