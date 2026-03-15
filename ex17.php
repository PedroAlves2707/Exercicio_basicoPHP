<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu simples</title>
</head>
<body>
   
<form method="post">
Escolha uma opção:<br>
1 - Continuar<br>
2 - Sair<br><br>

<input type="number" name="opcao">
<input type="submit" value="Enviar">
</form>

<?php

if(isset($_POST['opcao'])){

    $opcao = $_POST['opcao'];

    do{
        if($opcao == 1){
            echo "Você escolheu continuar";
        }
       elseif($opcao == 2){
        echo "Saindo do programa";
       } 
       else{
        echo "Opção inválida";
       }

    }while($opcao != 2);

}

?>

</body>
</html>