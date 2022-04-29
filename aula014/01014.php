<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>  função</title>
</head>
<body>
<h1>FUNÇÃO soma sem retorno</h1>
<h2>Função soma sem retorno de valor</h2>
<?php
function soma($a,$b){
   $s=$a+$b;
   echo"<p> soma vale $s</p>";
}
soma(3, 4);
soma(9, 3);
$x = 12;
$y = 4;
soma($x, $y);
soma($x,-$y);
soma(-$x,$y);
?>
</body>
</html>