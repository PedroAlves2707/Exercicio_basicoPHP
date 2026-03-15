<?php

$alunos = [
"Luiz" => 1,
"Pedro" => 6,
"Isaac" => 4,
"Bruno" => 9,
"Thiago" => 6,
];

foreach($alunos as $nome => $nota){

if($nota >= 7){
echo $nome . " - Aprovado <br>";
}
elseif($nota == 6){
    echo $nome . " - Aprovado no limite <br>";
}
else{
echo $nome . " - Reprovado <br>";
}

}

?>