<?php
    $pessoas=lerArquivo('data.txt');
    montarTabela($pessoas);



    function lerArquivo($nomearq){
        $dados = null;
        $handle = fopen($nomearq, "r");
        if ($handle) {
            while (($buffer = fgets($handle, 4096)) !== false) {
                $linha = json_decode($buffer);
                $dados[]=$linha;
            }
            if (!feof($handle)) {
                echo "Erro: falha inexperada de fgets()<br>";
                $dados = null;
            }
            fclose($handle);
        }
        return $dados;
    }

    function montarTabela($vetor){
        echo "<table border=\"1\">";
        echo "<tr><th>Nome</th><th>Dt Nasc</th><th>Sexo</th></tr>";
        foreach($vetor as $vet){
            echo "<tr>";
            foreach($vet as $p=>$v){
                if ($p=='dt_nasc'){
                    $v=inverteData($v);
                }
                echo "<td>$v</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

    }

    function inverteData($dt){
        $ret = explode("-", $dt);
        return $ret[2]."-".$ret[1]."-".$ret[0];
    }
?>