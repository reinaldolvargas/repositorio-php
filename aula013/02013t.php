<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>for</title>
   <style>
   div{background-color:#C0C0C0; width: 12%; padding-left:15px; margin-top:10px}
   a{background-color:#191970; color:#FFFFF0; border-radius: 7px;
    margin-bottom:10px; padding:5px }
   </style>
</head>
<body>
<h1>TABUADA RESULTADO</h1>
<a href="02013.php">volta</a>
<div>
<?php
$c=isset($_GET["nun"])?$_GET["nun"]:1;
for($n=1; $n<=10; $n++){$r=$n*$c;
echo"<br> $n x $c = $r";}
?>
</div>
</body>
</html>