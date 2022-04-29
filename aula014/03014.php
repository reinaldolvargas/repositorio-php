<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>função</title>
</head>
<body>
<h1>FUNÇÃO SOMA com varios valores</h1>
<p>A 'function soma(){}pode receber dois parametros<br>
'variavel = func_get_args();' retorna 'variavel=soma(v1, v2, v3, v4, ...);'<br>
'variavel = func_nun_args();' retorna 'variavel = soma( total de variaveis);'</p>
<?php
function soma(){
   $p = func_get_args();
   $t = func_num_args();
   $s = 0;
   for($i = 0; $i < $t; $i++){
      $s=$s+ $p[$i];
   }
   return $s;
}
$r = soma(3,5,-8);
echo"A soma dos valores é: $r";
?>
</body>
</html>