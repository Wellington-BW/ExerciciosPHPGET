<?php
$a = $_GET["a"];
$b = $_GET["b"];

$pattern = '/' . $b . '/';
if (preg_match($pattern, $a)) {
  echo 'Letra encontrada.';
} else {
  echo 'Letra não encontrada.';
}
// b não feita.
?>