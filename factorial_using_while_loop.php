<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding</title>
</head>

<body>
    <form action="" method="post">
        <h1>Factorial Number Using the While Loops</h1>
        Number : <input type="text" name="number" placeholder="Enter the Number" required>
        <button type="btn btn-submit" name="save">View Result</button>
</body>

</html>


<?php
$fact = 1;
if(isset($_POST['save'])) {
    $number = $_POST['number'];
    while($number>0) {
        $fact = $fact * $number;
        $number--;
    }
    echo"<br>";
    echo("The Factorial of ". $_POST['number']." is : ". $fact);
}
?>