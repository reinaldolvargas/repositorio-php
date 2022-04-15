<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Uso de variaveis</title>
</head>
<h1>Aplicação de variaveis</h1>
<body>
    <?php
    
        $n = 53;
        $no = " rei ";
        $na = "rainha"; 
        echo  $no;
        echo "$n <br>";  
        echo "> O codigo  escrito em concatenação <br>";
          echo ' .> $no. " tem"  . $n.  "anos" <br>' ;
           echo "$no. tem . $n.  anos <br>" ;
       
          echo "forma simplificada <br>
         &quot&#36na tem &#36n anos&quot
         . > $na tem $n anos <br>
         > A diferença e que na forma concatenada temos aspas duplalas
         em todas as strings e na forma simplificada so no começo e no fim
         da linha, o resultado na tela e o mesmo <br>
         > O simbolo de sifrão '$' indica uma variavel <br> 
         > Os caracteres 'n, no, na são variaveis criadas para indicar
          idade, rei e rainha, usando essas variaveis na linha  temos
           a frase que aparece na pagina <br> 
         > Quando precisamos de espaço entre as variaveis e conteudo 
         usamos o ponto final '.' <br>
         > Para pular para a proxima linha usamos a teg &lt;br> .
          dentro das aspas duplas <br>
         ex:. <br>
          <mark>  forma simplificada &lt;br>;</mark>; <br>";
         
    ?>
</body>
</html>