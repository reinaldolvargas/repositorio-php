<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>repetição</title>
   <style>
   div{background-color:#74992e ; width: 200px; padding-left: 10px;}
   #cd{background-color: #F0E68C; width:560px;}
   .bt{background-color: #00CED1; border-radius:10px;}
   </style>
</head>

<body>
<h1>GERANDO VARIAS CAIXAS DE TEXTO EM 'php' USANDO CONTADOR </h1>
<P>Abrimos um 'form', dentro do form uma teg 'php' onde é criado um contador <br>
com a quantidade de vesez que se quer repetir o formulario e uma 'echo' com a  <br>
linha de codigo do 'form'</P>
<p id="cd">codigo<br>
 &lt;form method="get" action="exer002a.php"><br>

&lt;?php<br>
$n = 1;<br>
while($n<=5){<br>
   
  echo" &lt;br>valor $n:&lt;input type='number' name='v$n' max='100' min='0' value='0'> ";<br>
   $n ++;<br>
}
?>&lt;&lt;input type="submit" value="enviar" ><br>
   &lt;/form><br>
</P><br>
<div>
   <form method="get" action="exer002a.php">

<?php
$n = 1;
while($n<=5){
   
  echo" <br>valor $n:<input type='number' name='v$n' max='100' min='0' value='0'> <br>";
   $n ++;
}
?>
<input  type="submit" value="enviar" class="bt">
   </form>
</div>
</body>
</html>