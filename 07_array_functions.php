<?php 
    /* --------- Array Functions -------- */

    /*
    Functions to work with arrays
    https://www.php.net/manual/en/ref.array.php
    */

    $fruits = ['apple', 'orange', 'pear'];

    # get length
    echo count($fruits);

    # search array
    var_dump(in_array('apple', $fruits));

    # add to array
    $fruits[] = 'grape';
    array_push($fruits, 'pineapple', 'coconut');
    array_unshift($fruits, 'mango');

    # remove from array

    # remove from the end of the array
    array_pop($fruits);
    #remove from the beginning
    array_shift($fruits);
    #remove aspecific item
    // unset($fruits[2]);

    # Split into 2 chunks
    $chunked_array = array_chunk($fruits, 2);
    print_r($chunked_array);

    print_r($fruits);

    # merge arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);
    # spread operator
    $arr4 = [...$arr1,...$arr2];
    print_r($arr3);
    print_r($arr4);

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];
    
    $c = array_combine($a, $b);

    print_r($c);

    $keys = array_keys($c);
    print_r($keys);

    $flipped = array_flip($c);
    print_r($flipped);

    # creates an array of numbers from 1 to 20
    $numbers = range(1,20);
    print_r($numbers);

    $newNumbers = array_map(function($number) {
        return "Number ${number}";
    }, $numbers);
    print_r($newNumbers);

    $lessThan10 = array_filter($numbers, fn($number) => 
        $number <=10);
    print_r($lessThan10);

    # get a sum of all number of that range
    // "carry" holds the return value of the previous iteration
    $sum = array_reduce($numbers, fn($carry, $number)
            => $carry + $number);
    var_dump($sum);



?>