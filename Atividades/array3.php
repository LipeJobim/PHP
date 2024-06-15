<?php

$nomes = array("Mouse", "Teclado", "Monitor", "Gabinete", "Estabilizador", "Caixa de som");

$tamanho = count($nomes);

for ($i = $tamanho - 1; $i >= 0; $i--) {
    echo $nomes[$i] . "<br>"; 
}

?>
