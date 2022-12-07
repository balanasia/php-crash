<?php 
/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

// check if file exists

if(file_exists($file)){
    // just reads the file and indicates
    // how much bytes does the file take
    //echo readfile($file);

    //allows to open a file and specify with what settings
    $handle = fopen($file, 'r'); 
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Bloom' . PHP_EOL . 'Stella' . PHP_EOL .
    'Flora' . PHP_EOL . 'Tecna' . PHP_EOL . 'Musa' . PHP_EOL . 'Aisha';
    fwrite($handle, $contents);
    fclose($handle);

}

?>