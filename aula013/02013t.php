<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>for</title>
</head>
<body>
<h1>TABUADA RESULTADO</h1>
<a href="02013.php">volta</a>
<?php
$n=isset($_GET["nun"])?$_GET["nun"]:1;
for($c=1; $c<-10; $c++){$r=$n*$c;
echo"$n x $c = $r";}

?>
</body>
</html>