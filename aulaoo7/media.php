<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>situação</title>
</head>
<h1>Media</h1>
<body>
<?php
echo"Os valores de &#36_GET[] SÃO LANÇADOS NA BARRA DE ENDEREÇO<br>";
$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$m = ($nota1+$nota2)/2;
echo"&#36nota1 = &#36_GET[&#34n1&#34]<br>
&#36nota2 = &#36_GET[&#34n2&#34];<br>
&#36m = (&#36nota1+&#36nota2)/2<br>";
echo"&#36sit = (&#36m<6)?&#34REPROVADO&#34:&#34APROVADO&#34;<br>";
echo"A media emtre $nota1 e $nota2 é $m <br>";
$sit = ($m<6)?"REPROVADO":"APROVADO<br>";
ECHO" A situação do aluno é $sit";
echo "<P>Modo concatenado</P>";
echo"&#34'A situação de aluno é&#34.(&#36m<6)?&#34REPROVADO&#34:&#34APROVADO&#34<br>
a formula e montada direto na linha da frase";


?>
</body>
</html>