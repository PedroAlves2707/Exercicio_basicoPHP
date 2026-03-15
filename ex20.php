<?php

$produtos = [
"Arroz" => 20,
"Feijão" => 8,
"Leite" => 7,
"Café" => 14    
];

foreach($produtos as $produto => $preco){
    echo "Produto: " . $produto . " - Preço: " . $preco . "<br>";
}

?>