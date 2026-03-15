<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Número</title>
</head>
<body>
    
<h2>Verificar número</h2>

<form method="post">
    Digite um número:
    <input type="number" name="numero">
    <input type="submit" value="Verificar">
</form>

<?php

if(isset($_POST['numero'])){

     $numero = $_POST['numero'];

     if($numero > 0){
        echo "Número Positivo";
     }
     elseif($numero < 0){
        echo "Número Negativo";
     }
     else{
        echo "O número é zero";
     }      
}

?>


</body>
</html>