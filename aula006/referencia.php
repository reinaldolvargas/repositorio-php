<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>referencia</title>
</head>
<h1>Atribução de variaveis por referencia</h1>
<body>
<?php
$a = 3;
$b = $a;
$b += 5;
echo"<h2>Condição normal</h2>";
 echo"valor de a = $a ,valor de b = $b" ;
echo"<br>&#36a = 3;<br>
&#36b = &#36a;<br>
&#36b += 5;<br>";
 echo"nessa expressão 'b' recebe o valor de 'a' e soma '5', 'b' passa a valer '8' enquanto 'a ' mantem o valor '3'" ;
 echo"<h2> Atribuindo referencia</h2>";
 $a = 3;
  $b = &$a;
  $b += 5;
 

 echo"valor de a = $a, valor de b = $b";
echo"<br>&#36a = 3;
  <br>&#36b = &&#36a;
  <br>&#36b += 5;
 <br>O simbolo '&' faz com que a variavel a tome como referencia o 
 valor da variavel 'b', 'a' passa a valer '8'";
 echo"<h2>Variavel de variavel</h2>";
 echo"<p>A variave de uma variavel consiste em transformar o valor de uma variavel em variavel
 para isso colocamos duas vezes o simbolo de variavel'$$' como no exemplo <br>";
 echo"'&#36site = cursoemvideo'<br> '&#36&#36site = cursophp<br>
  Foi usado a mesma variavel duas vezes para mostrar  valores diferentes, isso e possivel
  porque quando osamos a variavel pela segunda vez colocamos dois simbolos de variavel'$$'
  fazendo com que o valor da primeira passe a ser considerada uma variavel da variavel com
  o segundo valor acoplado a ela</p>";
 $site = "cursoemvideo";
 $$site = "cursophp";
 echo"$site <br> $cursoemvideo";
?>
</body>
</html>