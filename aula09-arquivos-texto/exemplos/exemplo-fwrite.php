<?php
# Quebra de linha no Windows é definida
# pelos caracteres CR e LF
# chr(13) - CR
# chr(10) - LF
define("EOL", chr(13).chr(10));

# fonte:
# https://www.php.net/manual/pt_BR/function.fwrite.php
echo '<h1>estou funcionando</h1>';

$pessoa["nome"] = "Marcio";
$pessoa["dt_nasc"] = "1968-01-01";
$pessoa["sexo"] = "M";
# EOL = End Of Line : Fim de Linha (quebra de linha)
$linha = json_encode($pessoa) . EOL;

echo $linha."<br>";
$fp = fopen('data.txt', 'w');
fwrite($fp, $linha);
fclose($fp);
echo '<h1>Acabei</h1>';

?>