<!DOCTYPE html>
<html>
<body>

<form method="post">
Digite valor do saque:
<input type="number" name="saque">
<input type="submit">
</form>

<?php

$saldo = 1000;

if(isset($_POST['saque'])){

$saque = $_POST['saque'];

if($saque <= $saldo){

$saldo = $saldo - $saque;

echo "Saque realizado. Saldo restante: " . $saldo;

}else{

echo "Saldo insuficiente";

}

}

?>

</body>
</html>