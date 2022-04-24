<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>repetição</title>
<style>
p{background-color:grey}

</style>
</head>
<h1>ESTRUTURAS DE REPETIÇÃO WHILE (ENQUANTO)</h1>
<body>
<?php

$c =1;

while($c <= 10){
   echo", $c " ; 
   $c ++;
}
echo"<p>Contagem ascendente<br>
&#36c = 1<br>
while(&#36c <= 10){<br>
   echo &#34,&#34 &#36c ;<br>
   &#36c ++; ou &#36 += 1;<br>
}</p><br>";



echo"<br>Contagem descendente<br>
&#36c1 = 10;<br>
while(&#36c1 >= 1){<br>
echo&#34, &#36c1 &#34;<br>
&#36c1 --;<br>
}<br> ";
$c1 = 10;
while($c1 >= 1){
echo", $c1";
$c1 --;
}
?>
</body>
</html>