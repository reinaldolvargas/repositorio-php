<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>teste</title>
   <style>
   div{background-color:#9370DB; width:250px; margin:3px; padding:3px}
   a{background-color:#8B008B; color:#FFFFE0; padding:3px ; margin: 3px; border-radius:6px;}
   #d1{background-color:#DA70D6; width:365px ; padding-left:5px}
   </style>
</head>
<body>
<h1>CONTAGEM COM INSERÇÃO DE VALORES</h1>
<a href="teste.php">voltar</a>
<div>
<?php
$c = isset($_GET["n"])?$_GET["n"]:0;
$f = isset($_GET["n1"])?$_GET["n1"]:1;
$i = isset($_GET["int"])?$_GET["int"]:1 ;
$c = $c;
$a =$c;
echo"Contagem";
while ($c <= $f-1) {
 $c += $i;
 echo" $c ,";
}
 echo"<br>Valor inicial $a <br> Intrevalo $i <br> Valor final $f ";
?>
</div>
<div id="d1">
<p>codigo:<br>
$c = isset($_GET["n"])?$_GET["n"]:0;<br>
$f = isset($_GET["n1"])?$_GET["n1"]:1;<br>
$i = isset($_GET["int"])?$_GET["int"]:1 ;<br>
$c = $c;<br>
$a =$c;<br>
echo"Contagem";<br>
while ($c <= $f-1) {<br>
 $c += $i;<br>
 echo" $c ,";<br>
}<br>
 echo"<br>Valor inicial $a <br> Intrevalo $i <br> Valor final $f ";<br>
?>
</p>
<p>estilo<br>
 &lt;style><br>
   div{background-color:#9370DB; width:250px; margin:3px; padding:3px}<br>
   a{background-color:#8B008B; color:#FFFFE0; padding:3px ; margin: 3px; border-radius:6px;}<br>
   #d1{background-color:#DA70D6; width:365px ; padding-left:5px}<br>
   &lt;/style>
</p>
</div>
</body>
</html>