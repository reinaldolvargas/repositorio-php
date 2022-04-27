<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>for</title>
   <style>
   div{background-color:#BDB766; width:15%}
   #bt{background-color:#3CB371; color:#E0FFFF; border-radius:5px }
   </style>
</head>
<body>
<h1>TABUADA</h1>
<div>
<form method="get" action="02013t.php">
<select name="nun">
<?php
for($n=1; $n<=10; $n++){echo"<option>$n</option>";}
?>
</select>
<input type="submit" value="Tabuada" id="bt";>
</form>
</div>
</body>
</html>