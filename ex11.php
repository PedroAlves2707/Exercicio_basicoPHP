<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    
<h2>Tabuada</h2>

<form method="post">
    Digite um número:
    <input type="number" name="numero">
    <input type="submit" value="Ver Tabuada">
</form>

<?php

if(isset($_POST['numero'])){

     $numero = $_POST['numero'];

     for($i = 1; $i <= 10; $i++){
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
     }
}

?>

</body>
</html>