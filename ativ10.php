<?php
$a = $_GET["a"];
$b = $_GET["b"];

for($x=$a;$x<=$b;$x++){
    if ($x%2 == 0){
        echo $x;
        echo '<br>';
    }
}
?>
