<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>for</title>
</head>
<body>
<h1>ESTRUTURA  FOR (PARA)</h1>
<P>A estrutura 'for' e a unificação da estrutura 'while' em uma unica linha<br>
'while:'<br>
variavel = 1;<br>
while(variavel <= valor){ echo variavel;}<br>
variavel ++<br> </P>
<p> 'for':<br>
for(variavel = valor i ; variavel <= valor f; variavel ++ interrupção){ echo variavel;}</p>
<?php 
echo"soma ";
for($i = 1; $i <= 10; $i++ ){
    echo ". $i,";
}
echo"<br>soma de neg a pos:";
for($i = -10; $i<=10; $i += 2){echo ". $i ,";}
echo"<br> multiplicação resultado por  2:";
for($i = 1; $i<=20; $i*=2){echo" . $i ";}

?>
</body>
</html>