<?php
    //Valid file type to upload
    $valid_type = array('png', 'jpg', 'gif', 'jpeg');

    if (isset($_POST['submit'])) {
        if (!empty($_FILES['upload']['name'])) {
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];

            $target_dir = 'uploads/' . $file_name;
        } else {
            $message = '<h1 style="color: red;">Please Upload A File!</h1>';
        }
        
        //Get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if (in_array($file_ext, $valid_type)) {
            //check if the size of file is too large
            if ($_FILES['upload']['size'] >= 1000000) {
                $message =  '<h1 style="color: red;">File is too large</h1>';
            }else {
                if (move_uploaded_file($file_tmp, $target_dir)) {
                    $message =  '<h1 style="color: green;"> The file has been Uploaded successfully!</h1>';
                } else {
                    $message = '<h1>Sorry there was an error uploading your file!</h1>';
                }
                
                //check if the file exists
                if (file_exists($target_dir)) {
                    $message = '<h1>Sorry file Already Exists.</h1>';
                }
            }
        } else {
            //produces an error if the file isn't Valid type
            $message = '<h1 style="color: red;">Invalid File Type!</h1>';
        }

        
    }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null ?>
    <form action="file-upload.php" enctype="multipart/form-data" method="POST">
        Select image to upload: <br>
        <input type="file" name="upload"><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>