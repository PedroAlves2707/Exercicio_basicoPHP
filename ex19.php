<?php

$numeros = [5,10,15,20,25];

$soma = 0;

foreach($numeros as $numero){
    $soma = $soma + $numero;
}

echo "Soma total: " . $soma;

?>