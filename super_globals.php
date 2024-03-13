<?php
    if (isset($_POST['submit'])) {
        // $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

        // alsu for validation
        $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        

        echo $firstname . '<br>';
        echo $lastname . '<br>';
        echo $age . '<br>';
        echo $email . '<br>';
    }   
    
?>
<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=marc$age=20">Click</a> -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    firstname : <input type="text" name="firstname" placeholder="firstname"> <br>
    lastname : <input type="text" name="lastname" placeholder="lastname"><br>
    age : <input type="text" name="age" placeholder="age"> <br>
    email : <input type="email" name="email"> <br>
    <input type="submit" value="submit" name="submit">
</form>

<!-- $_GET Contains information about variables passed through a URL or a form.
$_POST - Contains information about variables passed through a form.
S_COOKIE Contains information about variables passed through a cookie.
$_SESSION- Contains information about variables passed through a session.
$_SERVER- Contains information about the server environment.
$_ENV Contains information about the environment variables.
$_FILES - Contains information about files uploaded to the script
$_REQUEST Contains information about variables passed through the form or URL. -->