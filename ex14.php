<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma até 100</title>
</head>
<body>
    
<form method="post">
Digite até qual número somar:
<input type="number" name="numero">
<input type="submit" value="Somar">
</form>

<?php

if(isset($_POST['numero'])){

$numero = $_POST['numero'];
$i = 1;
$soma = 0;

while($i <= $numero){
    $soma = $soma + $i;
    $i++;
}

echo "Resultado da soma: " . $soma;

}

?>

</body>
</html>