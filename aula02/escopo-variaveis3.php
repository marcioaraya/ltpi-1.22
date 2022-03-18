<?php
    $num = 5000;

    function testa_escopo3(){
        $GLOBALS["num"]++;
        echo $GLOBALS["num"] . "<br>";
    }

    echo $num . "<br>";
    testa_escopo3();
    testa_escopo3();

?>