<?php
    /* ----- Variables & Data Types ----- */

    /* --------- PHP Data Types --------- */
    /*
    - String - A string is a series of characters surrounded by quotes
    - Integer - Whole numbers
    - Float - Decimal numbers
    - Boolean - true or false
    - Array - An array is a special variable, which can hold more than one value
    - Object - A class
    - NULL - Empty variable
    - Resource - A special variable that holds a resource
    */

    /* --------- Variable Rules --------- */
    /*
    - Variables must be prefixed with $
    - Variables must start with a letter or the underscore character
    - variables can't start with a number
    - Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variables are case-sensitive ($name and $NAME are two different variables)
    */ 

    $name = 'Hunter'; //string
    $age = 1; //int
    $is_Cat = true;
    $dabloons_on_paws = 4.67;

    // echo $is_Cat;
    // var_dump($is_Cat);
    // echo $name . ' is ' . $age . ' years old';
    // echo "${name} has ${dabloons_on_paws} dabloons on paws"
    // $x = '5' + '5';
    // var_dump($x);

    // echo 10-5;

    define('HOST', 'localhost');
    define('DB_NAME', 'dev_db');

    echo HOST
?>