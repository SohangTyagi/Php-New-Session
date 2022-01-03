<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>

<body>
    <form action="" method="post">
        <h1>Prime Number</h1>
        Number : <input type="text" name="number" placeholder="Enter the Number" required>
        <button type="btn btn-submit" name="save">View Result</button>
</body>

</html>


<?php
if(isset($_POST['save'])) {
    $number = $_POST['number'];  
    for ($i = 2; $i <= $number-1; $i++) {  
      if ($number % $i == 0) {  
      $value= True;  
      }  
}  
if (isset($value) && $value) {  
    echo"<br>";
     echo 'The Number '. $number . ' is not prime';  
}  else { 
    echo"<br>"; 
   echo 'The Number '. $number . ' is prime';  
   }   
}  
?>  