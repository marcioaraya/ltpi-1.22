<?php

function lerPessoa($pdo, $id_pessoa){

    $sql = 'select id_pessoa, ds_nome, ds_email, dt_nasc, cd_sexo, nr_telefone from tb_pessoa where id_pessoa = :id_pessoa';

    $statement = $pdo->prepare($sql);
    $statement->bindParam(':id_pessoa', $id_pessoa);
    $statement->execute();
    return $statement->fetch(PDO::FETCH_ASSOC);

}