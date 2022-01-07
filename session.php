<?php
session_start();

if(isset($_POST['save'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('Location: session_output.php');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <h1> Session Login Form</h1>
    <form action="" method="post">
        <label for="">Email : </label> <input type="email" name="email" required>
        <label for="">Password : </label> <input type="password" name="password" required>
        <button type="submit" name="save">Submit</button>
    </form>
</body>

</html>