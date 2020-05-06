<?php
$a = $_GET["a"];

echo "$a"."<br>";
echo hash("sha512","$a");
?>