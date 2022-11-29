<?php

    function registerUser($email) {
        echo $email . ' Registered';
    }

    function sum($n1, $n2){
        return $n1 + $n2;
    }

    $number =  sum(5, 5);
    echo $number;

    $subtract = function($n1, $n2){
        return $n1 - $n2;
    };

    echo $subtract(10, 5);

    # arrow funciton
    $multiply = fn($n1, $n2) => $n1 * $n2;
    echo $multiply(9,9);

?>