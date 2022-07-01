ALTER TABLE tb_pessoa
ADD COLUMN ds_senha VARCHAR(255) ;


UPDATE tb_pessoa
SET ds_senha=MD5('123456');

SELECT * FROM tb_pessoa;