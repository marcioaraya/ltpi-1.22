<?php
# fonte: https://www.php.net/manual/pt_BR/function.fgets.php
$handle = fopen("notas.txt", "r");
if ($handle) {
    echo "<table border=\"1\">";
    echo "<tr><th>Nome</th><th>Média</th><th>Sexo</th></tr>";
    while (($buffer = fgets($handle, 4096)) !== false) {
        $pessoa = json_decode($buffer, true);
        print_r($pessoa);
        echo "<tr>";
        foreach($pessoa as $p=>$v){
            echo "<td>$v</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    if (!feof($handle)) {
        echo "Erro: falha inesperada de fgets()<br>";
    }

    fclose($handle);
}
?>