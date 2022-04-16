<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operadores</title>
</head>
<h1>Operadores aritimeticos</h1>
<body>
<?php
echo"<h2>Operador de soma</h2>";
$n = $_GET["a"];
$n1 = $_GET["b"];
$s = $n + $n1;
$menos = $n - $n1;
$mult = $n * $n1;
$div = $n / $n1;
$mod = $n % $n1;
$media = ($n + $n1) / 2;
echo" Asoma entre 3 e 5 é $s <br>
O codigo e escrito desta forma <br>";
echo'$n = 3; <br>
$n1 = 5; <br>
$s = $n + $n1; <br>
$menos = $n - $n1; <br>
$mult = $n * $n1; <br>
$div = $n / $n1; <br>
$mod = $n % $n1; <br>
echo" Asoma entre 3 e 5 é $s"; <br>';
echo"<h2>Operadores suportados pelo php</h2> <br>
-> adição +<br>
->subtração -<br>
-> multiplicação *<br>
-> divisão /<br>
-> modulo % <br>
<h2>usando os outros opreadores</h2> <br>
<p>E só adicionar a variavel para cada operador </P>
<p>A subtração entre ($n - $n1) é = $menos</p><br>";
echo" A multiplicação vale ". ($n * $n1) ;
echo"<p><br> O paragrafo de subtração foi escrito sem concatenação
é nescessario que tenha uma variavel que execute a operação. <br>
ex:.&#36menos = &#36n - &#36n1, onde usamos a variavel &#36menos para mostrar o resultado <br>
> No paragrafode multiplicação foi usada a concatenação <mark>'.'</mark>
é preciso iniciar a linha com uma 'echo' a operação é lançada diretamente na linha entre parentas
basta que tenha as variaveis dos opperadores declaradas <br>
ex:.'echo&quot A multiplicação vale &quot. (&#36n * &#36n1);'</p> <br>";
echo"<h2>Ordem de precedencia</h2><br>
<p>-> parenteses '()' <br>
-> multiplicação '*' <br>
-> divisão '/' <br>
-> modulo '%'
-> adição e subtração '+ -'";
echo "a media e $media <br>";
echo "Descrição da linha de codigo -> &#36media = (&#36n + &#36n1) / 2
<br>na operação acima a soma e feita primeiro proque 'n e n1 estão dentro de parenteses
pela ordem de precedencia toda operação que estiver entre parenteses e executada primeiro
 independente do tipo de Operador ";
 echo"<h2>Metodo de entrada de valores</h2><br>
 <h3>Entrada de valores pela barra de endereço</h3>";
 
 echo"valores de entrada $n e $n1";
 echo"<p>Para permitir a entrada de valores pela barra de endereço e preciso criar uma ligação com um parametro acoplado a variavel
  e adicionar uma chamada na na barra de endereço<strong>'?parametro=valor'</strong> </p>";
echo'ligação-> $_GET["a"]';
echo"<br>ex:.http://127.0.0.1/repositorio-php/aula%20005/operadores.php<mark>?a=8&b=5</mark> ";
?>
</body>
</html>