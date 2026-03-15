<!DOCTYPE html>
<html>
<body>

<form method="post">

Nome:
<input type="text" name="nome">

<br><br>

Nota 1:
<input type="number" step="0.1" name="n1">

<br>

Nota 2:
<input type="number" step="0.1" name="n2">

<br>

Nota 3:
<input type="number" step="0.1" name="n3">

<br><br>

<input type="submit" value="Calcular média">

</form>

<?php

if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

$media = ($n1 + $n2 + $n3) / 3;

echo "<h3>Aluno: $nome</h3>";
echo "Média: $media <br>";

if($media >= 6){
echo "Situação: Aprovado";
}
elseif($media >= 5){
echo "Situação: Recuperação";
}
else{
echo "Situação: Reprovado";
}

}

?>

</body>
</html>