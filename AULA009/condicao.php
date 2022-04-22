<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>condição if</title>
</head>
<h1>CONDICIONAIS 'IF' (SE)</h1>

<body>
<H2>USANDO O OPERADOR TERNARIO PARA REPRESENTAR O COMANDO 'IF'</H2>
<a href="condicao.html">voltar</a>
<P>&#36maior = &#36a>&#36b ?&#36a:&#36b <br>
se a > que b <br>
maior recebe 'a'  se não <br>
mairo recebe 'b'</P>
<p>O ternario so serve para estruturas simples com uma variavel,
se a estrutura tiver mais de uma variavel tem que usar o comando 'if'.</p>
<p>Ex:.<br>
if(&#36idade>=18){<br>
&#36vota = true;<br>
&#36dirige = true;<br>
}<br>
else{<br>
&#36vota = false;<br>
&#36dirige = false<br>
}</p>
<?php
echo"<h2>exercicio<h2/><br>
--> o exercicio contem as duas formas , o 'ternario' e o 'if-else'<br>
codigo:<br>
-->'ternario'<br>
&#36a = &#36_GET[&#34ano&#34]?&#36_GET[&#34ano&#34]:date(&#34Y&#34);<br>
&#36i = date(&#34Y&#34) - &#36a;<br></p>
<p>--> 'if-else'<br>
if(&#36i >= 18){<br>
  &#36v = &#34pode votar&#34;<br>
  &#36d = &#34pode tirar carta de motorista&#34;<br> 
}<br>
else{<br>
  &#36v = &#34não pode votar&#34;<br>
  &#36d = &#34não pode dirigir&#34;<br> 
}<br> Na primeira linha 'a' recebe 'ano' do form html, se 'ano' não for informado<br>
'a' recebe data atual, essa situação dispença o uso de 'isset'
</p><br>";
$a = $_GET["ano"]?$_GET["ano"]:date("Y");
$i = date("Y") - $a;
$idade = date("Y")-$a;
echo"Resultado do codigo acima descrito:<br>Você nasceu em $a sua idade é $i anos";

if($i >18){
  $v = "pode votar";
  $d = "pode tirar carta de motorista"; 
}
else{
  $v = "não pode votar";
  $d = "não pode dirigir"; 
}
echo" Com essa idade voce $v e $d<br>";
if($idade<16){
   $tipovoto="não vota";
   }
   elseif(($idade>=16 && $idade<18) || ($idade>65)){
         $tipovoto="voto opcional";
      }
      else{
         $tipovoto="voto obrigatorio";
      }
   
   echo"<p>Condicional composta 'aninhadas'</p> <br>
   Você tem $idade, Sua condição eleitoral é $tipovoto.<br>
   <p>--> Na condicional composta colocamos um 'if' dentro do outropara criar uma <br>
   condição intermediaria ex: 'if' condição 'else' 'if condição intermediaria 'else' condição final.<br>
   Isso póde se repetir quantas vezes for nescessario<br>
   exemplo do codigo:<br></p>";
   echo"if(&#36idade<16){<br>
   &#36tipovoto=&#34não vota&#34;<br>
   }<br>
   else{<br>
      if(&#36idade>=16 && &#36idade<18){<br>
         &#36tipovoto=&#34voto opcional&#34;<br>
      }<br>
      else{<br>
         &#36tipovoto=&#34voto obrigatorio&#34;<br>
      }<br>
   }<br>";
   echo"<p>Na condicional simples temos duas opções , se não e uma coisa e outra<br>
   Na condicional composta temos tres ou mais condições, se não condição1 então condição 2,<br>
   se não condição 1 e não condição 2 então condição 3... e assim por diante</p>";
?>
</body>
</html>
