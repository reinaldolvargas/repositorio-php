<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ESCOLHA</title>
</head>
<h1>MULTIPLA ESCOLHA</h1>
<a href="ex02.html">volta</a>
<body>
<?php
$d = isset($_GET["ds"])?$_GET["ds"]:0;
switch($d){
   case 2:
   case 3:
   case 4:
   case 5:
   case 6:
      echo"<br>Acorda pra aprender!";
      break;
      case 7:
      case 8:
         echo"<br>Vai dormir seu mal e sono.";
         break;
         default:
         echo"fora de calendario";  
}
?>
</body>
</html>