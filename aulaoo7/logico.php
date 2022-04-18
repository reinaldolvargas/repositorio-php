<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>logico</title>
</head>
<h1>Operadores logicos</h1>
<body>
<?php
echo"-> 'e' representado por '&&' tem que cumprir todas esigencias<br>
-> 'ou' representado por ''or' ou '|| tem que cumprir uma ou outra esigencia<br>
-> 'ou exclusivo' representado por 'xor' so uma esigencia e correta<br>
-> 'não' representedo por '!' se for uma coisa não e outra<br>";
$ano = $_GET["an"];
$idade = 2014-$ano;
echo "quem nasceu em $ano tem idade de $idade <br>";
$tipo = ($idade>=18 && $idade<65)?"obrigatorio":"facultativo";
echo"Para a idade de: $idade o voto e $tipo<br>";
echo'&#36tipo = (&#36idade>=18 && &#36idade<65)?"obrigatorio":"facultativo";';
?>
</body>
</html>