<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>repetição</title>
</head>
<body>
<h1>REPETIÇÃO COM TESTE LOGICO NO FINAL (do</h1>
<p>Ao inves de comessar com 'while' começa com 'do'<br>
variavel = valor de inicio;<br>
do{<br>
echo variavel (informações de leitura)
$c++; variavel de contagem<br>
while(variavel<= valor final)</p>
<p>Example contagem progressiva :<br>
 24 April, 2022 contagem 1, 2, 3, 4, 5, 6, 7, 8, 9, 10<br />,
Example : </p>

<?php
$c = 1;# INICIO DA CONTAGEM
echo date(" d F, Y");/* texto mostra data*/
echo" contagem"; #texto mostra palavra contagem
do{
   echo" $c,"; #executa a contagem e mostra a sequencia
  $c++;# interrompe a contagem quando atinge valor final
}   
while($c <= 10); # determina o valor final

?>
<p> CONTAGEM REGRESSIVA<br>
Example :<br /></p>
<?php
$c=10;
echo date("d F, Y");
echo " contagem  ";
do{
echo "$c,";
$c--;
} while($c>=1)
?>


</body>
</html>