<!DOCTYPE html>
<html>
<body>

<form method="post">

Digite um número:
<input type="number" name="numero">

<input type="submit" value="Gerar Tabuada">

</form>

<?php

if(isset($_POST['numero'])){

$numero = $_POST['numero'];

echo "<table border='1'>";

for($i = 1; $i <= 10; $i++){

$resultado = $numero * $i;

echo "<tr>";
echo "<td>$numero x $i</td>";
echo "<td>$resultado</td>";
echo "</tr>";

}

echo "</table>";

}

?>

</body>
</html>