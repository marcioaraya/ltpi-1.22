<?php

function lerPessoa($pdo, $id_pessoa){

    $sql = 'select id_pessoa, ds_nome, ds_email, dt_nasc, cd_sexo, nr_telefone from tb_pessoa where id_pessoa = :id_pessoa';

    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id_pessoa', $id_pessoa);
    $statement->execute();
    # PDO::FETCH_ASSOC - os dados lidos são retornados em um vetor associativo, isto é, 
    # os índices do vetor não são numéricos, são strings, e neste caso
    # serão os nomes das colunas indicados no SELECT
    return $statement->fetch(PDO::FETCH_ASSOC);

}

function verificaUsuarioLogado(){
    if (isset($_COOKIE["usuario"])) {
        $ret[]=$_COOKIE["usuario"];
        $ret[]=$_COOKIE["ts_login"];
        return $ret;
    } else {
        return null;
    }
}

function cabecalho($usuario){
    date_default_timezone_set('America/Sao_Paulo');
    echo "<header>";
    echo "<p>Olá! ".$usuario[0].". Você efetuou login às ".date("d-m-Y H:i:s", $usuario[1])."<a href='logout.php'>Sair</a></p>";
    echo "</header>";
}