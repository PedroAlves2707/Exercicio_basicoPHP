<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<form method="post">

Nome:<br>
<input type="text" name="nome"><br><br>

Idade:<br>
<input type="number" name="idade"><br><br>

<input type="submit" value="Cadastrar">

</form>

<?php

if(!isset($_SESSION["cadastros"])){
$_SESSION["cadastros"] = [];
}

if(isset($_POST["nome"]) && isset($_POST["idade"])){

$novo = [
"nome" => $_POST["nome"],
"idade" => $_POST["idade"]
];

$_SESSION["cadastros"][] = $novo;

}

$maiores = 0;

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Idade</th><th>Situação</th></tr>";

foreach($_SESSION["cadastros"] as $pessoa){

if($pessoa["idade"] >= 18){
$situacao = "Maior de idade";
$maiores++;
}else{
$situacao = "Menor de idade";
}

echo "<tr>";
echo "<td>".$pessoa["nome"]."</td>";
echo "<td>".$pessoa["idade"]."</td>";
echo "<td>".$situacao."</td>";
echo "</tr>";

}

echo "</table>";

echo "<br>Total de maiores de idade: ".$maiores;

?>

</body>
</html>