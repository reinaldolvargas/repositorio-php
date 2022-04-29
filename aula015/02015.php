<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>
<body>
<h1>PASSAGEM POR REFERENCIA</h1>
<p>finction teste(& variavel x){<br>
variavel x = variavel x + valor;<br>
echo variavel x;<br>
}<br>
variavel y = valor;<br>
teste(variavel y); <BR>
ECHO VARIAVEL 'Y'</p>
<p>AS EXPRESSÕES SÃOI IDENTICAS, AS DIFERENÇÃO SÃO  A 'FUNCTION TESTE ' QUE TEM O SIMBOLO '&' ANTES DA VARIAVEL QUE IDENTIFICA COMO PASSAGEM POR REFERENCIA ONDE O VALOR DA VARIAVEL 'Y' PASSA A SER O RESULTADO DA EXPRESSÃO NO FINAL.
<?php
echo"<p>passagem por referencia</p>";
function teste(&$x1){
    $x1+=2;
    echo"o valor de x é $x1";
}
$y1=3;
teste($y1);
echo"<p>o valor de y é $y1</p>";
?>
</body>
</html>