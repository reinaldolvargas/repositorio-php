<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
$txt = isset($_GET["t"])?$_GET["t"]:"texto generico";
$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
$cor = isset($_GET["cor"])?$_GET["cor"]:"#000067";
?>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>posição de script</title>
   <style>
   span.texto{
      font-size:<?php echo $tam;?>;
      color:<?php echo $cor;?>;
   }
   </style>
</head>
<h1>Posicionamento de script e integração com css</h1>
<a href="ex003.html">voltar</a><br>
<body>
<?php

echo "<span class='texto'>$txt</span>";
?>
<h2>Orientação sobre a estrutura</h2>
<p>As variaveis foram montadas no inicio  cabeçario dentro de &lt;head><br>
Isso permite que seja criado comandos de estilo em css, caso contrario o css não funciona <br>
</p>
<p>
ex:.&lt;style>Configuração de estilo para que as configurações de texto funcionem.
   span.texto{
      font-size:&lt;?php echo $tam;?>;
      color:&lt;?php echo $cor;?>;
   }
   &lt;/style>
</p>
</body>

</html>