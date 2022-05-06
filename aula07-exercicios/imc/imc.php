<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC </title>
</head>
<body>
    <h1>Cálculo IMC</h1>
    <?php
    # verifica se o formulário foi exibido e se o usuário
    # informou os dados, se não enviou dados então mostra formulário
    # usa isset() para verificar se a variável existe
    if (!isset($_GET["bt_submit"])) {
    ?>
        <form action="imc.php" method="GET">
        <label for="in_altura">Altura:</label>
        <input type="text" name="altura" id="in_altura" placeholder="Digite a altura">
        <br>
        <label for="in_peso">Peso</label>
        <input type="text" name="peso" id="in_peso" placeholder="Digite o peso">
        <br>
        <input type="submit" value="Calcular" name="bt_submit">
        </form>
    <?php    
    } else {
        # tratar os dados do formulário
        $peso = str_replace(",", ".", $_GET["peso"]);
        $altura = str_replace(",", ".", $_GET["altura"]);
        # calcula imc
        $imc = $peso / ($altura * $altura);
        # verifica qual é a situacao de acordo com valor do imc
        if ($imc >= 40.0 ) {
            $situacao = "Obesidade III (Mórbida)";
        } elseif ($imc >= 35) {
            $situacao = "Obesidade II (Severa)";
        } elseif ($imc >= 30) {
            $situacao = "Obesidade I";
        } elseif ($imc >= 25) {
            $situacao = "Acima do Peso";
        } elseif ($imc >= 18.5) {
            $situacao = "Peso Normal";
        } elseif ($imc >= 17.0) {
            $situacao = "Abaixo do Peso";
        } else {
            $situacao = "Muito abaixo do Peso";
        }
        #exibe imc e situacao
        echo "<p>O IMC é ".str_replace(".", ",", sprintf("%01.2f", $imc))." ($situacao).</p>";
        echo "<p><a href=\"imc.php\">Novo cálculo</a></p>";

    }
    ?>

</body>
</html>