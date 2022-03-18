<?php
    $a = 1;
    $b = 2;

    function Sum(){
        global $a, $b;
        $b = $a + $b;
    }
    echo 'valores de $a e $b antes de chamar Sum()<br>';
    echo '$a: '.$a . '<br>';
    echo '$b: '.$b . '<br>';

    Sum();

    echo 'valores de $a e $b depois de chamar Sum()<br>';
    echo '$a: '.$a . '<br>';
    echo '$b: '.$b . '<br>';

    Sum();

    echo 'valores de $a e $b depois de chamar Sum()<br>';
    echo '$a: '.$a . '<br>';
    echo '$b: '.$b . '<br>';    

?>