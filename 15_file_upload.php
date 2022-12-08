<?php 
    $allowed_ext = array('png', 'jpeg', 'webp', 'jpeg', 'gif');

    if(isset($_POST['submit'])){
        if(!empty($_FILES['upload']['name'])){
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];

            // target directory to upload file into
            $target_dir = "uploads/${file_name}";

            // get file extension ending and put it to lower case
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));
            echo $file_ext;

            // validate the file input
            if(in_array($file_ext, $allowed_ext)){
                if($file_size <= 1000000){
                    move_uploaded_file($file_tmp, $target_dir);
                    $message = '<p style="color:green;">File Uploaded</p>';
                } else {
                    $message = '<p style="color:red;">The file is too big</p>';
                }
            } else {
                $message = '<p style="color:red;">Invalid file type</p>';
            }

        }else {
            $message = '<p style="color:red;">Please choose a file</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>

    <style>
        form {
            display: inline-grid;
        }
    </style>
</head>
<body>
    <?php echo $message ?? null; ?>
    <!-- important attribute to upload file! -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
    method="POST" enctype="multipart/form-data">
        Select an image to upload:
        <input type="file" name="upload" id="">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>