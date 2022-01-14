<?php

function insert() {
    include("config.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];

    $sql = mysqli_query($conn,"INSERT INTO user(name,email,password,gender,number) value('$name','$email','$password','$gender','$number')");
    if($sql == 1) {
        echo("<script>alert('Data Inserted');</script>");
    } else {
        echo("<script>alert('Data Not Inserted');</script>");
    }
}

function delete() {
    include("config.php");

}

?>