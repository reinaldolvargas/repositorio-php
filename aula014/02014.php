<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>função</title>
</head>
<body>
<h1>FUNÇÃO SOMA</h1>

<?php
echo"<h2>Função soma com retorno de valor</h2>";
function soma($a, $b){

return $a + $b ;
}
$x = -3;
$y = 4;
$r = soma($x, $y);
echo"A soma entre $x e $y é igual a $r";
?>
</body>
</html>