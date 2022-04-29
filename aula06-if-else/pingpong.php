<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PingPong</title>
</head>
<body>
    <h1>Ping Pong</h1>

    <?php

        for($i=1; $i<=100;$i++){
            $texto = $i;
            # testa se é divisível por 3
            if ($i%3==0){
                $texto = $texto . " PING";
            }
            # testa se é divisível por 5
            if ($i%5==0){
                $texto = $texto . " PONG";
            }            
            echo "<p>$texto</p>";
        }
    
    ?>
</body>
</html>