<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite uma palavra:
<input type="text" name="palavra">
<input type="submit">
</form>

<?php

if(isset($_POST['palavra'])){

$palavra = $_POST['palavra'];
$contador = 0;

for($i = 0; $i < strlen($palavra); $i++){

$letra = $palavra[$i];

if($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
$contador++;
}

}

echo "Quantidade de vogais: " . $contador;

}

?>

</body>
</html>