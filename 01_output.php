<?php
    // echo 'Howdy';
    /*
     echo 1;
     echo 2;
     */

     // echo - Output strings, numbers, html, etc
     echo 3, 'Hello', 10.5;

     //works like echo, but can only take in a single argument   
     print 123;

     //print_r() = print single values and arrays
     print_r([1,2,3]);

     // var_dump() = returns more info like data type and length
     var_dump('Hello');

     // var_export() - cimilar to var_dump(), outputs a string representation of a variable
     var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- equivalent to <?php echo 'Post One'; ?> -->
    <h1><?= 'Post One'; ?></h1>
</body>
</html>
