<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>comparação</title>
</head>
<h1>Operadores relacionais</h1>
<body>
<?php
echo"<h2>Operador unario</h2>";
echo"faz comparações simples e usado para mostrar o resultado dos
comparadores relacionais<br>
sitase: expressão ? verdadeiro : falso<br> --> &#36maior = &#36a > &#36b ? &#36a : &#36b <br> 
Se 'a' for maior que 'b' variavel 'maior recebe valor de 'a'; se 'a' for menor
 que 'b' variavel 'maior' recebe valor de 'b'<br>
 -->&#36r = &#36a > &#36b ? &#36a + &#36b : &#36a - &#36b , 'se a for maior que b então 
 r recebe a o resultado da soma  de a + b ; se a for menor que
 b então r recebe o resultado da diferença entre a - b<br>
 --> situação &#36sit = &#36m < 7? 'recuperação' : 'aprovado'<br>
 Se 'm' for menor que 7 'sit' recebe 'recuperação, se 'm' for maior
 que '7' sit recebe 'aprovado'<br> ";
echo"<p>-> mairo &#36a > &#36b<br>
-> menor &#36a < &#36b<br>
-> mairo ou igual &#36a >= &#36b<br>
-> menor ou igual &#36a <= &#36b<br>
-> diferente &#36a <> &#36b<br>
-> igual &#36a == &#36b não diferencia numeros de string <br>
-> identico &#36a === &#36b diferencia numeros de string</p>";
echo"<h2>exercicios</h2>";
$n1 = $_GET["a"];
$n2 = $_GET["b"];
$tipo = $_GET["op"];
echo"&#36n1 = &#36_GET[a]<br>
&#36n2 = &#36_GET[b]<br>
&#36tipo = &#36_GET[op] <br>";
echo"Os valores passados são:<br>$n1 e $n2" ;  
$r = ($tipo == "s")?$n1+$n2:$n1*$n2;
echo"<br>&#36r = (&#36tipo == s)?&#36n1+&#36n2:&#36n1*&#36n2;<br>";
echo" <br>O resultado e $r";
echo"<h3>igual e identico</h3>,br>";
echo"Igual '==' so concidera o valor não o tipo, não distingue 'string de numero'<br>";
$a = 3;
$b = "3";
$r = ($a == $b)?"sim":"não <br>";
echo"&#36a = 3;<br>
&#36b = &#34 3&#34;<br>
&#36r = (&#36a == &#36b)?&#34sim&#34:&#34não &#34;<br>";
echo"As variaveis A e B são iguais? $r <br>";
echo"<p>Identico '===' compara valor e tipo faz distinção estra numero e dtring</p>";
$r = ($a === $b)?"sim":"não";
echo"&#36r = (&#36a === &#36b)?&#34sim&#34:&#34não&#34<br>";
echo"As variaveis A e B são iguais? $r <br>";

?>
</body>
</html>