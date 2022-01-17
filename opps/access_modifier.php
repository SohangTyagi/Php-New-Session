<?php

class Myclass 
{
    public $number;
    public function num()
    {
        echo "hello";
    }

    public function setvalue($new)
    {
        $this->number = $new;
        // echo $this->number;
    }
    public function getvalue()
    {
        echo $this->number;
    }
}
// $obj = new Myclass;
// $obj->num();
// echo"<br>";

$obj = new Myclass;
$obj->setvalue(3);
echo"<br>";

$obj->setvalue(5);
$obj->getvalue();
echo"<br>";

// $obj1 = new Myclass;



?>