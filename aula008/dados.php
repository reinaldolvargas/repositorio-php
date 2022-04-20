<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php + html</title>
</head>
<h1>Integração html e php

</h1>
<a href="ex001.html">voltar <br></a>
<body>
<?php
$valor = $_GET["v"];
$rq = sqrt($valor);
echo "O valor digitado foi: $valor <br>
Sua raiz quadrada e: " . number_format($rq,3);
echo"<h2>Explicando o codigo</h2>";
echo"&#36valor = &#36_GET[&#34v&#34]; <br>
&#36rq = sqrt(&#36valor);";
echo"--> &#36valor variavel onde sera armazenado o valor de entrada <br>
--> &#36_GET[] acoplador via barra de endereço para entrada de dados <br>
--> &#34v&#34 variavel de ligação entre php e html <br> 
--> &#36rq variavel onde sera armazenado o  valor da raiz quadrada<br>
-->'sqrt()' conversor de raiz quadrada <br>
--> (&#36valor) variavel do valor que sera extraido a raiz quadrada <br>
-->'. number_format(VALOR,CASAS DECIMAIS)' FORMATA  O TOTAL DE CASAS DECIMAIS<BR>";
echo"<p> Os dados são digitados na pagina de html  e enviados para a pagina de php pelo metodo '&#36_GET'[] com a variavel de ligação 'v' onde e feito o cauculo e exibido o valor, a pagina html e so para a entrada de dados</p>";

?>
</body>
</html>