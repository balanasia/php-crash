<?php
    /* ---- Conditionals & Operators ---- */

    /* ------------ Operators ----------- */

    /*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to
    */

    /* ---------- If Statements --------- */

    /*
    ** If Statement Syntax
    if (condition) {
    // code to be executed if condition is true
    }
    */

    // $age = 20;

    // if($age >= 18){
    //     echo 'You are old enough to vote';
    // } else {
    //     echo "Sorry, you are not old enough to vote";
    // }

    // $t = date("H");

    // if($t < 12){
    //     echo 'Good morning';
    // } else if($t > 17) {
    //     echo 'Good Afternoon';
    // } else {
    //     echo 'Good Evening';
    // }

    $posts = ['First Post!'];

    // if(!empty($posts)){
    //     echo $posts[0];
    // } else {
    //     echo 'No Posts';
    // }

    // ternary operator
    // $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
    // echo $firstPost;

    $firstPost = $posts[0] ?? null;
    echo $firstPost;

    $favcolor = 'pink';

    switch($favcolor) {
        case 'pink':
            echo 'Your fave color is pink!';
            break;
        case 'red':
            echo 'Your fave color is red!';
            break;
        case 'purple':
            echo 'Your fave color is purple!';
            break;
        default:
            echo 'I don;t know your fave color';
    }

?>