<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
// checking if the URL input is empty
if(isset($_POST['submit'])){
    echo $_GET['name'];
    echo $_GET['age']; 
}
?>

<!-- this current page -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Ana&age=19">Link</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
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