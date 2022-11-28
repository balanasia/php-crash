<?php
    //simple array
    $numbers = [1,44,55,22];
    $fruits = ['apple', 'orange', 'pear'];

    // print_r($fruits);
    // var_dump($numbers);
    // echo $fruits[2];

    // Associative Array
    // similar to dictionary?
    $colors = [
        1 => 'red',
        2 => 'blue',
        4 => 'green'
    ];
    // echo $colors[2];

    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    // echo $hex['blue'];

    $cat = [
        'first_name' => 'Hunter',
        'last_name' => 'Clawthorne',
    ];

    // echo $cat['first_name'];

    $cats = [
        [
            'first_name' => 'Hunter',
            'last_name' => 'Clawthorne',
        ],
        [
            'first_name' => 'Yuumi',
            'last_name' => 'Fuzzybeans',
        ],
        [
            'first_name' => 'Shinji',
            'last_name' => 'Ikari',
        ]
    ];

    // echo $cats[1]['first_name'];

    var_dump(json_encode($cats));
?>