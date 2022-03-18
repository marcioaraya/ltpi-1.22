<?php
    $num = 5000;

    function testa_escopo1(){
        $num = 5;
        echo $num . "<br>";
    }

    echo $num . "<br>";
    testa_escopo1();
    testa_escopo1();

?>