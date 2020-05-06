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
if (is_dir("/$a") ===true) {
    rmdir("/$a");
    echo "Pasta substituida com sucesso";
    mkdir("/$a", "0777");
}else{
    echo "Não foi possivel realizar a operação";
}
?>