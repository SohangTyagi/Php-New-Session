<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse</title>
</head>

<body>
    <form action="" method="post">
        <h1>Reverse Number Using the While Loops</h1>
        Number : <input type="number" name="number" placeholder="Enter the Number" required>
        <button type="btn btn-submit" name="save">View Result</button>
</body>

</html>

<?php

if(isset($_POST['save'])) {
    $number = $_POST['number'];
    $revnum = 0;
    while ($number != 0)
    {
    $revnum = $revnum * 10 + $number % 10;
    $number = (int)($number / 10); 
}
    echo"<br>";
    echo "Reverse number: $revnum";

}


// Another Method.


// if(isset($_POST['save'])) {
//     $number = $_POST['number'];
//     $revnum = strrev($number);
//     echo"<br>";
//     echo "Reverse number: $revnum";
// }
?>