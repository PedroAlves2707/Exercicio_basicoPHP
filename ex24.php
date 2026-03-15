<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite números separados por vírgula:<br>
<input type="text" name="numeros">
<input type="submit" value="Ver maior número">
</form>

<?php

if(isset($_POST['numeros'])){

$entrada = $_POST['numeros'];

$numeros = explode(",", $entrada);

$maior = $numeros[0];

foreach($numeros as $numero){

if($numero > $maior){
$maior = $numero;
}

}

echo "Maior número: " . $maior;

}

?>

</body>
</html>