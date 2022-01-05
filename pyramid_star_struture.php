<?php
$num = 10;
for($a = 1; $a<=$num; $a++) {
    for($b=1; $b<=(2 * $num)-1;$b++) {
        if($b>=$num-($a-1) && $b>=$num + ($a-1)) {
            echo"*";
        } else {
            echo "&nbsp";
        }
    }
    echo"<br>";
}
for($i = 1; $i<=$num; $i++) {
    for($j=1; $j<=(2 * $num)-1;$j++) {
        if($j>=$num-($i-1) && $j<=$num + ($i-1)) {
            echo"*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo"<br>";
}


?>