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
        <h1>Adding Number Using the Loops</h1>
        Number : <input type="text" name="number" placeholder="Enter the Number" required>
        <button type="btn btn-submit" name="save">View Result</button>
    </form>
</body>

</html>
<?php
$sum = 0;
if(isset($_POST['save'])) {
    $number = $_POST['number'];
    for($x = $number ; $x>=1; $x--) {
        $sum = $sum + $x;
    }
echo("The Sum to $number is : ". $sum);
}
?>