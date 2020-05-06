<?php
$a = $_GET["a"];
$b = rand(1,10);
if($a == $b){
    echo "Você acertou o número!"."<br>";
};
echo "Número digitado : $a"."<br>";
echo "Número sorteado : $b"."<br>";
?>