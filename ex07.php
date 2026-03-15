<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Par ou Ímpar</title>
</head>
<body>
    
<form method="post">
    Digite um número:
    <input type="number" name="numero">
    <input type="submit" value="Verificar">
</form>

<?php

if(isset($_POST['numero'])){

     $numero = $_POST['numero'];

     if($numero % 2 == 0){
        echo "Número par";
     } else {
        echo "Número ímpar";
     }
}

?>

</body>
</html>