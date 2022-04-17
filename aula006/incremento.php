<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>incrementos</title>
</head>
<h1>Operarores de incremento me decremento</h1>
<body>
<?php
echo"-> pre-incremento '&#36a = &#36a + 1 0u ++&#36a', ativa o incremento antes de mostrar a variavel
alterando o valor da variavel <br>
-> pos-inmcremento '&#36a = &#36a + 1 ou '&#36a--' mostra a variavel depois ativa o incremento<br>
-> pre-decremento '&#36a = &#36a - 1 ou --&#36, ativa o decremento antes de mostrar a variavel
alterando o valor da variavel <br>
-> pos-decremento '&#36a = &#36a - 1 ou &#36a--,  mostra a variavel depois ativa o decremento";
echo"<h2>exemplos:.</h2>";
$atual = $_GET["aa"];//pega a atribuição "aa" e vincula a variavel '$atual
echo"O ano atual é $atual e o ano anterior é " .--$atual;#o -- antes da variavel subtrai 1 do valor atual e mostra o resultado 
 echo" O ano atual é ".++$atual; echo" e o ano posterior e ".++$atual;
echo"<br> na linha acima foi usado um decremento e dois incrementos<br>
um decremento para mostrar o ano anterior, o programa passa a adotar o valor do decremento como atual<br>
um incremento para retornar o valor correto e outro incremento para mostrar o valor posterior "; 
echo"<br>'O ano atual é &#36atual e o ano anterior é  .--&#36atual;O ano atual é .++&#36atual;e o ano posterior e .++&#36atual'";
?>
</body>
</html>