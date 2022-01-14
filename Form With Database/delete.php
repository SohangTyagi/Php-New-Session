<?php

include "config.php";

$id=$_GET['id'];
$deletequery=mysqli_query($conn,"DELETE FROM user WHERE id=$id");

header("Location: index.php");


?>