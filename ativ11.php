<?php
$a = $_GET["a"];

if (empty($a)){
    echo "Nada informado."."<br>";
}
if (strlen("$a")>2){
    echo "Possui mais de 2 caracteres."."<br>";
}else{
    echo "Não possui mais de 2 caracteres"."<br>";
}
echo strtolower("$a")."<br>";
echo str_replace(' ', '', $a)."<br>";
echo mkdir("/$a", "0777");
?>
