<?php
session_unset(); 
session_destroy();
HEADER('Location: http://localhost/dbms/lib_first.php');
exit(); 
?>