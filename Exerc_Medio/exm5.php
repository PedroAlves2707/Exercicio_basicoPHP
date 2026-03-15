<!DOCTYPE html>
<html>
<body>

<form method="post">

Nome:
<input type="text" name="nome">

<br>

Idade:
<input type="number" name="idade">

<br><br>

<input type="submit" value="Cadastrar">

</form>

<?php

$pessoas = [];

if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$pessoas[] = [
"nome" => $nome,
"idade" => $idade
];

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Idade</th><th>Situação</th></tr>";

foreach($pessoas as $pessoa){

echo "<tr>";

echo "<td>".$pessoa['nome']."</td>";
echo "<td>".$pessoa['idade']."</td>";

if($pessoa['idade'] >= 18){
echo "<td>Maior de idade</td>";
}
else{
echo "<td>Menor de idade</td>";
}

echo "</tr>";

}

echo "</table>";

}

?>

</body>
</html>