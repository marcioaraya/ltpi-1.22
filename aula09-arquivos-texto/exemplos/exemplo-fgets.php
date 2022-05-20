<?php

# fonte: https://www.php.net/manual/pt_BR/function.fgets.php
$handle = fopen("data.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
        echo $buffer . '<br>';
    }
    if (!feof($handle)) {
        echo "Erro: falha inexperada de fgets()<br>";
    }

    fclose($handle);
}
?>