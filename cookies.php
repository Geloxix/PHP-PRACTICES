<!-- Cookies are the mechanism for storing data in the remote browser and thus tracking or identifying return users. 
You can set specific data stored in browser and then retrieve it when the usse visit the site again  -->

<?php
    setcookie('name', $_POST['name'], time() + 86000 * 5);

    if (isset($_COOKIE['name'])) {
        echo $_COOKIE['name'];
    }

    if (isset($_COOKIE['unset'])) {
        setcookie('name', '', time() - 86000);
    }   
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    name : <input type="text" name="name"><br>
    <input type="submit" value="submit">
    <input type="button" value="unset" name="unset">
</form>

