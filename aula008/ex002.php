<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>comandos php + html</title>
</head>
<h1> Usando comandos com integração php html</h1>
<a href="ex002.html">voltar</a><br>
<body>
<?php
$nome = isset( $_GET["nome"])?$_GET["nome"]:["não informado"];
$ano = isset($_GET["ano"])?$_GET["ano"]:["não informado"] ;
$sexo = $_GET["sexo"];
$idade = date("Y") - $ano;
echo"$nome ,é: $sexo, tem $idade anos";
?>
</body>
</html>