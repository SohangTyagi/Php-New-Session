<?php
session_start();
echo("<pre>");
print_r($_SESSION);
session_destroy();

// Output 
// All Session .
// But we refresh the page the session value is Truncate beacuse of session_destory().
?>