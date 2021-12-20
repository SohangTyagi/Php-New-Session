<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="get">
        Name: <input type="text" name="name" placeholder="Enter Your name">
        Surname: <input type="text" name="surname" placeholder="Enter Your Surname">
        Email: <input type="email" name="email" placeholder="Enter Your email">

        <button type="submit" name="save">Submit</button>
    </form>
</body>
</html>


<?php

// if(isset($_POST['save'])) {
//     echo("Name:  ". $_POST['name']);
//     echo"<br>";
//     echo("Surname:  ". $_POST['surname']);
//     echo"<br>";
//     echo("Email:  ". $_POST['email']);
//     echo"<br>";
// }

// Output of $_POST And $_GET is same but while using the $_POST we can't get the result in url only getting the result in client side ,
// while using the $_GET we get the form result into the URL;

if(isset($_GET['save'])) {
    echo("Name:  ". $_GET['name']);
    echo"<br>";
    echo("Surname:  ". $_GET['surname']);
    echo"<br>";
    echo("Email:  ". $_GET['email']);
    echo"<br>";
}


// $_Request is also used for getting the for data it used both Get And Post method.

?>
