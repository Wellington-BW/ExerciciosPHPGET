<?php
$a = $_GET["a"];

if(is_numeric("$a") ===true){
    echo str_pad("$a","10","0",STR_PAD_LEFT);
}else{
    echo str_pad("$a","10","Z",STR_PAD_RIGHT);
}
?>