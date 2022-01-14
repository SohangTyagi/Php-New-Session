<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "newform";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {
    echo "Connection Error";
}


?>