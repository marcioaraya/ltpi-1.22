<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média </title>
</head>
<body>
    <h1>Cálculo Média</h1>
    <?php
    # verifica se o formulário foi exibido e se o usuário
    # informou os dados, se não enviou dados então mostra formulário
    # usa isset() para verificar se a variável existe
    if (!isset($_GET["bt_submit"])) {
    ?>
        <form action="media.php" method="GET">
        <label for="in_nome">
            Nome:
        </label>
        <input type="text" name="nome" id="in_nome" placeholder="Digite o nome" required> 
        <br>
        <label for="in_nota1">Nota1</label>
        <input type="text" name="nota1" id="in_nota1" placeholder="Digite a nota 1" required>
        <br>
        <label for="in_nota2">Nota2</label>
        <input type="text" name="nota2" id="in_nota2" placeholder="Digite a nota 2" required>
        <br>
        <input type="submit" value="Calcular" name="bt_submit">
        </form>
    <?php    
    } else {
        # tratar os dados do formulário
        $nome = $_GET["nome"];
        $nota1 = str_replace(",", ".", $_GET["nota1"]);
        $nota2 = str_replace(",", ".", $_GET["nota2"]);
        # calcula Média
        $media = ($nota1 + $nota2) / 2;
        # verifica qual é a situacao de acordo com valor do Média
        if ($media >= 6.0 ) {
            $situacao = "Aprovado)";
        } elseif ($media >= 4.0) {
            $situacao = "Exame Final";
        } else {
            $situacao = "Reprovado";
        }
        #exibe Média e situacao
        echo "<p>A média do aluno(a) $nome é ".str_replace(".", ",", sprintf("%01.2f", $media))." ($situacao).</p>";
        echo "<p><a href=\"imc.php\">Novo cálculo</a></p>";

    }
    ?>

</body>
</html>