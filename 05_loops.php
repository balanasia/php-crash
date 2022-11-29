<?php
    /* -------- Loops & Iteration ------- */

    /* ------------ For Loop ------------ */

    /*
    ** For Loop Syntax
    for (initialize; condition; increment) {
    // code to be executed
    }
    */

    for($x = 0; $x <=10; $x++){
        echo $x . '<br>';
    }

    /* ------------ While Loop ------------ */

    /*
    ** While Loop Syntax
    while (condition) {
    // code to be executed
    }
    */

    $x = 1;

    while($x <= 15){
        echo $x . '<br>';
        $x++;
    }

    /* ---------- Do While Loop --------- */

    /*
    ** Do While Loop Syntax
    do {
    // code to be executed
    } while (condition);
    do...while loop will always execute the block of code once, even if the condition is false.
    */

    $x = 1;
    do {
        echo $x . '<br>';
        $x++;
    } while($x <=5);
    
    /* ---------- Foreach Loop ---------- */

    /*
    ** Foreach Loop Syntax
    foreach ($array as $value) {
    // code to be executed
    }
    */

    $posts = ['First Post', 'Second Post', 'Third Post'];

    // for($x = 0; $x < count($posts); $x++){
    //     echo $posts[$x];
    // }

    foreach($posts as $index => $post){
        echo $index . ' - ' . $post . '<br>';
    }

    $cat = [
        'first_name' => 'Hunter',
        'last_name' => 'Clawthorne',
    ];

    foreach($cat as $key => $value){
        echo "$key - $value<br>";
    }

?>