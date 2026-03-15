<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador Simples</title>
</head>
<body>
    
<h2>Calculadora Simples</h2>

<form method="post">

Número 1:
<input type="number" name="n1">

<br><br>

Número 2:
<input type="number" name="n2">

<br><br>

Operação:
<select name="operacao">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>

<br><br>

<input type="submit" value="Calcular">

</form>

<?php

if(isset($_POST['n1']) && isset($_POST['n2'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operacao = $_POST['operacao'];

    if($operacao == "+"){
        $resultado = $n1 + $n2;
    }
    elseif($operacao == "-"){
        $resultado = $n1 - $n2;
    }
    elseif($operacao == "*"){
        $resultado = $n1 * $n2;
    }
    elseif($operacao == "/"){
        $resultado = $n1 / $n2;
    }

    echo "Resultado: " . $resultado;
}

?>

</body>
</html>