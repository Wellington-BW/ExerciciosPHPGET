<?php
$a = $_GET["a"];
$b = $_GET["b"];

$pattern = '/' . $b . '/';
if (preg_match($pattern, $a)) {
  echo 'Letra encontrada.';
} else {
  echo 'Letra não encontrada.';
} 
echo '<br>';
$bl = strpos($a,$b);

if($bl===false){
  echo 'Letra não encontrada na frase.';
}else{
  echo 'Letra encontrada na posição: '.$bl;
}
?>
