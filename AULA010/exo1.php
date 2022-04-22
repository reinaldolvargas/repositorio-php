<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>escolha</title>
</head>
<h1>CONDICIONAL SWITCH (ESCOLHA)</h1>
<a href="ex01.html">voltar</a>

<body>
<?php
$n = isset($_GET["nun"])?$_GET["nun"]:0;
$o = isset($_GET["oper"])?$_GET["oper"]:1;
switch($o){
    case 1:
        $r = $n*2;
        break;
        case 2:
            $r = $n*$n*$n;
            break;
            case 3:
                $r = sqrt($n);
}
echo"<p>O resultado solicitado é: $r</p>";
?>
</body>
</html>