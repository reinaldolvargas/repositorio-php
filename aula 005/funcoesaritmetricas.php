<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>funções php</title>
</head>
<h1>Funções aritimetricas de php</h1>
<body>

<?php
$v1 = $_GET["x"];
$v2 = $_GET["y"];
echo"<h2>As funções são</h2>";
echo"<p>-> 'abs()' valor absoluto<br>
-> 'pow()' potenciação x<sup>2 <br>
-> 'sqrt'() raiz quadrada &radic; <br>
-> 'riund'() arredondamento <br>
----> pode ser usado os complementos'(ceil)' arredonda para cima e '(floor)' arredonda para menos <br>
-> 'intval()' valor inteiro de um numero real 'xx,x', mostra so os numeros a esquerda da casa decimal<br>
-> 'number_interval()' formatação do numero, util para definir casas decimais
 (numero,casas decimais,ttipo de separador,ponto de milhar) (x.xxx,xxx)(n,3,separador,'.')";
echo"<h2>Valores recebidos: $v1 e $v2</h2>";
echo"O valor absoluto de $v2 e " . abs($v2);
echo"<br>O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
echo"<br>A raiz de $v1 e " .sqrt($v1);
echo"<br>O valor de $v2 arredondado é " .round($v2);
echo" o 'round' pode ser subitituido por <strong>'ceil'</strong> ou ,<strong>floor</strong>, <br>
'ceil' arredonda para cima; 'floor' arredonda para baixo";
echo"<br> A parte inteira de $v2 é " .intval ($v2);
echo"<br> O valor de $v1 em moeda e R$" .  number_format($v1,2);


?>
</body>
</html>