<?php
if (isset($_POST['Submit'])) {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $number = trim($_POST["number"]);
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $number = htmlspecialchars($_POST["number"]);

    if($name =="") {
        $errorMsg=  "error : You did not enter a name.";
        $code= "1" ;
    }
    elseif($number == "") {
        $errorMsg=  "error : Please enter number.";
        $code= "2";
    }
    //check if the number field is numeric
    elseif(is_numeric(trim($number)) == false){
        $errorMsg=  "error : Please enter numeric value.";
        $code= "2";
    }
    //check if the lentgh of  number is not ten
    elseif(strlen($number)<10){
        $errorMsg=  "error : Number should be ten digits.";
        $code= "2";
    }
    elseif(strlen($number)>10){
        $errorMsg=  "error : Number should be ten digits.";
        $code= "2";
    }
    //check if email field is empty
    elseif($email == ""){
        $errorMsg=  "error : You did not enter a email.";
        $code= "3";
    } //check for valid email 
    elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
    $errorMsg= 'error : You did not enter a valid email.';
    $code= "3";
    }
    
    else {
        include('functions.php');
        insert();
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Database Connection Form</h1>
    <h2>Registration</h2>
    <form action="" method="POST">
        <label for="">Name : </label> <input type="text" name="name"><br><br>
        <?php if(isset($code) && $code == 1){ echo($errorMsg);} ?><br><br>
        <label for=""> Email : </label><input type="email" name="email"><br><br>
        <?php if(isset($code) && $code == 3){ echo($errorMsg);} ?><br><br>
        <label for=""> Password : </label><input type="password" name="password"><br><br>
        Gender:
        <input name="gender" type="radio" id="gender" value="Male">Male

        <input name="gender" type="radio" id="gender" value="Female">Female

        <input name="gender" type="radio" id="gender" value="Transgender">Transgender
        <br><br>
        <label for=""> Number : </label> <input type="number" name="number"><br><br>
        <?php if(isset($code) && $code == 2){ echo($errorMsg);} ?><br><br>
        <input type="submit" name="Submit" value="Submit">

    </form>
</body>
<form action="">
    <h1>All Users Data</h1>
    <table>
        <thead>
            <th>id </th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>Operation</th>
        </thead>
        <tbody>
        <?php
        include "config.php";
        $data=mysqli_query($conn,"SELECT * FROM user");
        while($res=mysqli_fetch_assoc($data)){
        ?>
            <tr>
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['name']?></td>
                <td><?php echo $res['email']?></td>
                <td><?php echo $res['number']?></td>
                <td><?php echo $res['gender']?></td>
                <td><a href='delete.php?id=<?php echo $res['id']?>'>Delete</a></td>
            </tr>
            <?php
        }

        ?>
        </tbody>
    </table>

</form>

</html>