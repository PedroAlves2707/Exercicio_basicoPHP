<!DOCTYPE html>
<html>
<body>

<form method="post">

Número 1:
<input type="number" name="n1" required>

<br><br>

Número 2:
<input type="number" name="n2" required>

<br><br>

Operação:
<select name="operacao">

<option value="soma">Soma</option>
<option value="subtracao">Subtração</option>
<option value="multiplicacao">Multiplicação</option>
<option value="divisao">Divisão</option>

</select>

<br><br>

<input type="submit" value="Calcular">

</form>

<?php

if(isset($_POST['n1'])){

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$operacao = $_POST['operacao'];

switch($operacao){

case "soma":
$resultado = $n1 + $n2;
break;

case "subtracao":
$resultado = $n1 - $n2;
break;

case "multiplicacao":
$resultado = $n1 * $n2;
break;

case "divisao":

if($n2 == 0){
echo "Não é possível dividir por zero";
exit;
}

$resultado = $n1 / $n2;
break;

}

echo "Resultado: " . $resultado;

}

?>

</body>
</html>