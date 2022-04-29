<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>rotinas</title>
</head>
<body>
<h1>função retorna valores 2</h1>
<h2>FORMAS DE ENVIO</h2>
<p>'function teste(variavel x){<br>
    variavel x = variavel x + valor;<br>
    echo variavel x;}<br>
variavel y = valor<br>
teste(variavel y); retorna valor da variavel 'y' para substituir a variavel 'x'<br>
A passagem por valores não altere o valor da variavel 'y'.
</p> 
</p>
<?php
echo"<p>passagem por valor</p>";
function teste($x){
    $x+=2;
    echo"o valor de x é $x";
}
$y=3;
teste($y);
echo"<p>o valor de y é $y</p>"; 
?>
<?php
 
?>
</body>
</html>