<?php
$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];
$d = $_GET["d"];

$e = ($a + $b + $c + $d) / 4;

echo "A média do aluno é $e."."<br>";

if($e >= 7){
    echo "O aluno foi aprovado!";
}else{
    if($e >= 5){
        echo "O aluno está em exame!";
    }else{
        if($e < 5){
            echo "O aluno foi reprovado!";
        }
    }
}
?>