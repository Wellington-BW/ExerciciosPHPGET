<?php
$a = $_GET["a"];
$b = $_GET["b"];

similar_text($a, $b, $percent);
echo $percent;
?>