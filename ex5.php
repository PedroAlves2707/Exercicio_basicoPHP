<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Idade</title>
</head>
<body>
    
<form method="post">
    Digite sua idade:
    <input type="number" name="idade">
    <input type="submit" value="Verificar">
</form>

<?php

if(isset($_POST['idade'])){
    $idade = $_POST['idade'];

    if($idade >= 18){
        echo "Maior de idade";
      } else {
          echo "Menor de idade";

    }
}

?>


</body>
</html>