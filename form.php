<?php

if(isset($_POST['button1']))
{
    $firstname = $_POST['name'];
    $surname = $_POST['surname'];
    header("Location: result1.php?fname=$firstname&&sname=$surname");
}
elseif(isset($_POST['button2']))
{
    $firstname = $_POST['name'];
    $surname = $_POST['surname'];
    header("Location: result2.php?fname=$firstname&&sname=$surname");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="" method="post">
        Name: <Input type="text" name="name">
        Surname: <Input type="text" name="surname">
        <button type="submit" name="button1">Submit 1</button>
        <button type="submit" name="button2">Submit 2</button>
    </form>
    
</body>
</html>