<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>função php</title>
</head>
<body>
<h1>FUNÇÕES INTERNAS DO PHP</h1>
<H2>STRINGS</H2>
<p>Todo caracter ou sequencia de caracteres que estiver entre aspas "" e conciderado 'string'</p><br>
<h3>PRINT 'F'</h3>
<p>--> 'printf' exibe o conteudo na tela com formatação<br>
ex: variavelprod="leit";<br>
vaviavelpreco="4.5"<br>
printf("o %s esta custando R$%.2f",$prod,$preco);<br>
--> simbolo '%s" e usado para retornar string<br>
--> simbolo '%f' retorna numero com ponto flutuante, o '.2 ' antes do 'f' determina as casas depois da virgula<br>
--> simbolo '%d' valor decimal (positivo uo negativo<br>
--> simbolo '%u' valor decimal sem sinal<br>
</p>
<H3>PRINT 'R'</H3>
<P>BASTANTE UTILIZADO PARA DEMONSTRAR VETORES<br>
O 'print_r' pode ser substituido por:<br>
--> 'var_dump(variavel); ou <br>
--> var_export(variavel);</P>";
<h3>WORDWRAP</h3>
<P> o 'WORDWRAP' serve para quebra de linha mas ele basicamente quebra as linhas somente do codigo, para atuar no codigo e no texto visivel e preciso algumas extensões<br>
variavel = wordwrap(variavel do texto, valor); 'so quebra no codigo, o valor e a quantidade maxima de caracteres por linha<br>
--> se colocarmos o 'br' quebra a linha na tela mas não no codigo<br>
--> para atuar no codigo e no texto visivel adiciona '\n'<br>
'variavel = wordwrap(variavel do texto, valor de caracteres, "br para quebra de linha, \n para atuar tanto no codigo quanto no texto visivel);<br>
$t=wordwrap(variavel, 20, "br\n");</P>
<h3>STRLEN(VARIAVEL TXT)</h3>
<P>O 'strlen' conta a quantidade de letras em um textoincluindo espaços<br>
variavel = "texto';"<br>
variavel = strlen(variavel do texto);<br></p>
echo(var); mostra a quantidade de caracteres
<h3>TRIM</H3>
<P>o 'TRIM' e usado em conjunto com o m'strlen' para eliminar espaçõs no inicio e no fim do texto evitando erros na utilização de espaços<br>
varnome = "---fulano de siclano---";<br>
varnovo=trim(varnome);<br>
echo(varnovo); para mostrar o texto sem espaços extras
O 'trim e dividido em:<br>
'ltrim' elimina espaços a esquerda<br>
'rtrim' elimina espaços a direita</p>
<h3>STR_WORD_COUNT</H3>
<P>Conta a quantidade de palavras em uma frase<br>
varfrase ='eu vou estudas php";<br>
varcont = str_word_count(varfrase, valor 0, 1 ,ou 2);<br>
o valor '0' conta as palavras<br>
o valor '1' conta como vetor ,e preciso usar a função 'print_r' em conjunto para mostrar a posição de cada palavra na frase<br>
o valor 2 conta como vetor conciderando a posição da primeira letra de cada palavra dentro do texto<br>
print_r(varcont);</P>
<h3>EXPLODE</h3>
<p>procura os espaços entra as frases para mostrar a posição de cada palavra em forma de vetor, as aspas e para definir o separador '"=>"'<br>
var ="corsu em video";<br>
var = explode("",var do texto)<br>
print_r(vra vetor);</p>
<h3>STR_SPLIT</h3>
<P>Conta a posição das letras de uma palavra mostrando em formato de vetor<br>
varnome ="maria";<br>
varvetor= str_split(varnome);<br>
print_r(varvetor);</P>
<h3>IMPLODE</h3>
<P>varvetor[0] ='curso";<br>
varvetor[1] = "em";<br>
varvetor[2] = video";<br>
vartexto = implode("#", varvetor);<br>
print(vartexto);<br>
Converte vetores em texto com o simbolo que estiver entre aspas no lugar dos espaços<br>
Pode ser usada a função 'join()' nu lugar de 'implode'</P>
<h3>CHR</h3>
<p> O 'chr' mostra a letra correspondente a o codigo em ascII<br>
varletra = chr(67);<br>
echo"a letra 67 é varletra";</p>
<h3>ORD</h3>
<P>o CONTRARIO DE 'CHR' O 'ORD' MOSTRA O CODIGO DE CAda letra em acsII<br>
varletra = "c";<br>
varcod = ord(varletra);
 </P>
 <h3>STRTOLOWER</h3>
 <P>serve para formatar letras maiusculas em minusculas<br>
variavelnome="NOME";<br>
variavelnome2= strtolower(varnome);<br>
echo"seu nome e 'nome'";</P>
<h3>STRTOUPPER</h3>
<P>FORMATA LETRAS MINUSCULAS EM MAIUSCOLAS</P>
<H3>UCFIRST()</H3>
<p>fORMATA A PRIMEIRA LETRA DO PARAGRAFO EM MAIUSCULA</p>
<H3>UCWORDS()</H3>
<p>formata a primeira letra de cada palavra em maiuscolas</p>
<h3>STRREV()  </h3>
<P>iNVERTE O SENTIDO DA PALAVRA</P>
<h3>STRPOS()</h3>
<P>VAR frase = "estoun aprendendo PHP";<br>
   $pos = ($frase,"PHP");<br>
   Mostra a posição da paldvra

</P>

</body>
</html>