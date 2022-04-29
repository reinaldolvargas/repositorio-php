<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>rotinas</title>
</head>
<body>
<h1>ROTINAS EXTERNAS</h1>
<P>Rotinas que não fazem parte do php, criadas pelo  usuario<br>
Criamos uma folha de funções.php e essas funções poderão ser utilizadas na pagina principal sem problema pelo 'include'"nome da pagina de funções" em seguida o nome da função <br>
O comando 'include permite incluir comandos em 'php; java; css; html...' mas não e o unico para essa finalidade, temos tambem o 'require'(requerido)<br>
Diferençãs, o 'include' não interrompe o processo caso o script não seja encontrado<br>
O 'require' interrompe o processo onde houver a falha impedindo que o restante do conteudo seja completado menmo que esteja em ordem.</P>
<p>Ainda temos uma variação das duas funções acima<br>
--> 'include_once'<br>
--, 'require_once'<br>
--> Extensão '_once' faz uma varedura , se o scripti ja foi carregado impede a repetição.</p>
<?php
include"funcoes.php";
echo"<h1>CHAMANDO AS FUNÇÕES PELO INCLUDE</h1>";
echo"<p>função 'ola();'</p><br>";
ola();
echo"<p>função 'mostravalores(valor a ser mostrado);</p>";
mostravalores(5);
echo"<h2>fim</h2>";
?>
</body>
</html>