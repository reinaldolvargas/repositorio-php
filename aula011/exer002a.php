<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>repetição</title>
   <style>
   div{background-color:red ; width: 95px; padding: 10px;margin-top: 5px}
   a{background-color:green; padding: 5px; margin-bottom: 5px; border-radius: 6px}
    .bloco{background-color: grey; width: 350px; padding-left: 6px}
   </style>
</head>

<body>
<h1>GERANDO VARIAS CAIXAS DE TEXTO EM 'php' USANDO CONTADOR</h1>
<a href="exer002.php">voltar</a><br>
<p>O primeiro bloco 'while' pega os dados da 'url (pagina do formulario)'<br>
O segundo bloco vai usar esses dados e gerar a visualisação do resultado</p>
<p class="bloco">bloco 1<br>
$i = 1;<br>
while($i <= 5){<br>
   $v = "num" .$i;<br>
   $url = "v" . $i;<br>
   $$v = isset($_GET[$url])?$_GET[$url]:0;<br>
   $i ++;<br>
}</p>
<p class="bloco">bloco 2<br>
$i = 1;<br>
while($i<=5){<br>
   $v = "num" .$i;<br>
   echo"Valores $i : "   . $$v ;<br>
   $i ++;<br>
}<br>Pode ser escrito tambem da seguinte forma<br>
'echo"$num1 $num2 $num3 $num4 $num5";'
</p>
<div>
<?php
$i = 1;
while($i <= 5){
   $v = "num" .$i;
   $url = "v" . $i;
   $$v = isset($_GET[$url])?$_GET[$url]:0;
   $i ++;
}
$i = 1;
while($i<=5){
   $v = "num" .$i;
   echo"Valores $i : "   . $$v."<br>" ;
   $i ++;
}
?>
</div>
</body>
</html>