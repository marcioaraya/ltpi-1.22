<?php

define("EOL", chr(13).chr(10));


# fonte:
# https://www.php.net/manual/pt_BR/function.fwrite.php
echo '<h1>estou funcionando</h1>';

$pessoa["nome"] = "Marcio";
$pessoa["dt_nasc"] = "1968-01-01";
$pessoa["sexo"] = "M";

$linha = json_encode($pessoa) . EOL;

echo $linha."<br>";
$fp = fopen('data.txt', 'w');
fwrite($fp, $linha);
fclose($fp);
echo '<h1>Acabei</h1>';
// o conteúdo de 'data.txt' agora é 123 e não 23!
?>