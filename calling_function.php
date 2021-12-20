<?php

$a = 10; //
function myfun()
{
    global $a;
    echo $a * 10; //100
}
myfun();//100
echo "<br>";
echo($a); //10
?>