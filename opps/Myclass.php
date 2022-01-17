<?php

class Myclass 
{
    // public $number;
    public function myfun($number)
    {
        echo "$number";
    }
}

$obj = new Myclass;
$obj->myfun(2);


?>
