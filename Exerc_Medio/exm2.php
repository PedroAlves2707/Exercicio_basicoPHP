<!DOCTYPE html>
<html>
<body>

<form method="get">

Digite um número:
<input type="number" name="numero">

<input type="submit" value="Verificar">

</form>

<?php

if(isset($_GET['numero'])){

$numero = $_GET['numero'];

if($numero % 2 == 0){
echo "Número par<br>";
}
else{
echo "Número ímpar<br>";
}

if($numero > 0){
echo "Número positivo";
}
elseif($numero < 0){
echo "Número negativo";
}
else{
echo "O número é zero";
}

}

?>

</body>
</html>