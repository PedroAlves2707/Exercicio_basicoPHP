<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Senha</title>
</head>
<body>
    
<form method="post">
Digite a senha:
<input type="password" name="senha">
<input type="submit" value="Entrar">
</form>

<?php

$senhaCorreta = "1234";

if(isset($_POST['senha'])){

$senhaDigitada = $_POST['senha'];

while($senhaDigitada != $senhaCorreta){
    echo "Senha incorreta";
    break;
}

if($senhaDigitada == $senhaCorreta){
    echo "Senha correta!";
}

}

?>

</body>
</html>