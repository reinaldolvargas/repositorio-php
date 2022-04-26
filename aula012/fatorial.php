<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>fatorial</title>
</head>
<body>
<h1>    fatoração   </h1>
<a href="01012fatorial.html">volta</>
<p></p>
<?php
$v=isset($_GET["val"])?$_GET["val"]:0;
echo"<h1>Calculando o Fatorial de $v</h1>";
$c=$v;
$cal=1;
do{
$cal=$cal*$c;
$c--;
}while($c>=1);
echo"<h2>:$v != $cal</h2>";
?>
</body>
</html>