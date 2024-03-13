<!-- Sessions are a way to store information (in variables)
to be use accross multiple pages.
Unlike cookies, Sessions are stored in the Server -->
<?php
    session_start();

    if (isset($_POST['submit'])) {
        $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if ($username == "marc" && $password == "1231") {
            $_SESSION['username'] = $username;
            header('Location: ./utils/dashboard.php');
        } else {
            echo 'Login Failed!';
        }
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <div>
        <label>Username :</label>
        <input type="text" name="username" id="username">
    </div>
    <div>
        <label>Password :</label>
        <input type="password" name="password" id="passsword">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
