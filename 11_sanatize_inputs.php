<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// checking if the URL input is empty
if(isset($_POST['submit'])){
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS); 
    // echo $name;

    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}
?>

<!-- this current page -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
method="GET">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>

    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="Submit">
</form>