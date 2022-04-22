<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>media</title>
   <style>
   h1{background-color:greenyellow; text-align: center; border-radius: 10px;}
   div{background-color: bisque; width: 200px; padding-left: 10px; border-radius: 10px;}
   a{background-color: coral; border-radius: 40px; padding: 10px;}
    </style>
   </head>
<h1>MEDIA DE NOTAS</h1>
<a href="exercicio.html">voltar</a>
<body>
<div>
<?php
$n1 = isset($_GET["n1"])?$_GET["n1"]:"0";
$n2 = isset($_GET["n2"])?$_GET["n2"]:"0";
$media=($n1+$n2)/2;
if($media<=4){
    $r = "reprovado";
}
elseif($media>4 && $media<6){
    $r = "recuperação";
}
else{$r = "arpovado";}
echo"<p>Nota 1: $n1<br>
Nota 2: $n2<br>
Media do aluno é: $media <br>
Resultado:$r</p>";
?>
</div>
</body>
</html>