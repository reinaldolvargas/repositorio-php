<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores</title>
</head>
<h1>Operadores de atribuição</h1>
<body>
<?php
echo"O sinal de '=' e o simbolo de atribuição, nas funções abaixo esta atribuindo os valores
a direita do simbolo a variavel a esquerda '&#36a = valor'<br>";
echo"-> &#36a = 1; <br>
-> &#36b = 3; <br>
-> &#36c = &#36a + &#36b;<br>
-> &#36c = &#36c + 5; ou &#36c += 5; variavel = ela mesma + valor<br>
-> &#36b = &#36b + &#36a; ou &#36b += &#36a <br>
-> &#36a = &#36a = 1; ou &#36a += 1; ou &#36a++; quando 'variavel = a ela mesma + valor' podemos usar 'variavel++";
echo"<p>da para fazer a simplificação com os seguintes operadores
-> 'adição +' &#36a = &#36a + &#36b ou &#36a += &#36b<br>
-> 'subtração -' &#36a = &#36a - &#36b ou &#36a -= &#36b<br>
-> 'multiplicação *' &#36a = &#36a * &#36b ou &#36a *= &#36b <br>
-> 'divisão /' &#36a = &#36a / &#36b ou &#36a /= &#36b <br>
-> 'modulo %' &#36a = &#36a % &#36b ou &#36a %= &#36b <br>
-> 'concatenação .' &#36a = &#36a . &#36b ou &#36a .= &#36b</p>";
echo"<h2>exercicios</h2>";
$preco = $_GET["p"];
echo"O preço do produto é R$".number_format($preco,2);
$preco = $preco + ($preco*10/100);
echo"<br>aumento de 10% R$".number_format($preco,2);
echo"<br>'&#36preco = &#36preco + (&#36preco*10/100)' ou '&$36preco += &#36preco*10/100'<br>
para desconto '&$36preco -= &#36preco*10/100' troca o sinal de '+' pelo sinal de '-'";
echo"<h2>Operadores de incremento e decremento</h2>";
echo"-> pre-incremento '&#36a = &#36a + 1 0u ++&#36a', ativa o incremento antes de mostrar a variavel
alterando o valor da variavel <br>
-> pos-inmcremento '&#36a = &#36a + 1 ou '&#36a--' mostra a variavel depois ativa o incremento<br>
-> pre-decremento '&#36a = &#36a - 1 ou --&#36, ativa o decremento antes de mostrar a variavel
alterando o valor da variavel <br>
-> pos-decremento '&#36a = &#36a - 1 ou &#36a--,  mostra a variavel depois ativa o incremento<br>";
?>
</body>
</html>