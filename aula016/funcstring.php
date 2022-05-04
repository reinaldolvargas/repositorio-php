<?php
function imprimef(){
    include "funcstring.php";
wordwrap();
}
echo"função printer";
function printr(){
$x[0] = 4;
$x[1] = 3;
$x [2] = 8;
print_r($x);}

function wordwrap(){
  $t = "aqui temos um texto grandr para ilustrrar o funcionamento da função 'wurdwrap'";
  $r = wordwrap($t, 20, "<br>\N"); 
  echo $r; 
}
function TO_LOWER(){
  $nome = "rei";
  $nome2 = strtolower($nome);
  echo"seu nome e $nome2";
}
function TO_upper(){
  $nome = "rei";
  $nome2 = strtolower($nome);
  echo"seu nome e $nome2";
}
function ucfirst(){
  $nome = "rei";
  $nome2 = strtolower($nome);
  echo"seu nome e $nome2";
}
?>
