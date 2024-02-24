<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Project</title>
</head>

<body>
    <form action="index.php" method="post">
        <!-- <input type="radio" name="payments[]" value="paypal">Paypal <br>
        <input type="radio" name="payments[]" value="Gcash">Gcash <br>
        <input type="radio" name="payments[]" value="visa">Visa <br> -->
        <!-- <input type="text" name="name"> <br>
        <input type="text" name="number"> <br>
        <input type="text" name="email"> <br> -->
        <!-- <input type="checkbox" name="foods[]" value="shawarma"> Shawarma <br>
        <input type="checkbox" name="foods[]" value="pizza"> Pizza <br>
        <input type="checkbox" name="foods[]" value="burger"> Burger <br>
        <input type="checkbox" name="foods[]" value="fries"> Fries <br>
        <input type="text" name="person"> <br> -->
        num1: <input type="text" name="num1"> <br>
        num2: <input type="text" name="num2"> <br> <br>
        <input type="submit" value="+" name="add">
        <input type="submit" value="-" name="subtract">
        <input type="submit" value="*" name="multiply">
        <input type="submit" value="/" name="divide">
    </form>
</body>

</html>


<?php
    $nums = array(2,4,8,1,7);

    $min_value = $nums[0];

    for ($i = 1; $i < count($nums); $i++) {

        if ($nums[$i] < $min_value) {
            $min_value = $nums[$i];
        }
    }

    echo "max value is" . $min_value . "<br>";
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"]; 

    if (isset($_POST["add"])) {
        echo $num1 + $num2;
    } elseif (isset($_POST["subtract"])) {
        echo $num1 - $num2;
    } elseif (isset($_POST["multiply"])) {
        echo $num1 * $num2;
    } elseif (isset($_POST["divide"])) {
        echo $num1 / $num2;
    } 

// $payments = $_POST["payments"];

// foreach ($payments as $payment) {
//     echo "$payment <br>";
// }

// echo "Today is " . date("m-d-y-l-H-h-i-s-a") . "<br>";
// $foods = $_POST["foods"];

// foreach($foods as $food) {
//     if ($food === "shawarma") {
//         echo "You picked shawarma! <br>";
//     } 
// }

$genders = array("kim" => "Female", "raul" => "Gay", "john" => "Male");
print_r(array_values($genders));

// if (isset($_POST["select"])) {
//     $number = $_POST["number"];
//     $email = $_POST["email"];
//     $name = htmlspecialchars($_POST["name"]);
//     $sanitizeNumber = filter_input(INPUT_POST, "number", FILTER_SANITIZE_NUMBER_INT);

//     echo"{$sanitizeNumber} <br>";
//     if (!filter_var($number, FILTER_SANITIZE_NUMBER_INT) === false) {
//         echo"Valid number <br>";
//     } else {
//         echo"Invalid number <br>";
//     }
//     $emailSani = filter_var($email, FILTER_VALIDATE_EMAIL);
//     echo "You are {$name} Your PN {$sanitizeNumber} and {$email} <br>";
//     echo "{$sanitizeNumber} <br>";
// }

// $fruits = array("Orange", "Banana", "Apple");

// foreach($fruits as $fruit) {
//     echo $fruit . "<br>";
// }
// $fruits = implode($fruits);
// echo $fruits . "<br>";

?>