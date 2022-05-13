<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $data="2022-05-40";
       $var_data = explode("-", $data);
       # $var_data[0] = 2022
       # $var_data[1] = 05
       # $var_data[2] = 13

       if (checkdate($var_data[1], $var_data[2], $var_data[0])){
           echo "Data válida <br>";
       } else {
           echo "Data inválida <br>";
       }
       ?>


</body>
</html>