<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 
<?PHP
echo 'hello'.$_SESSION['LOGEDNAME'];
echo"<br>";
echo 'hello'.$_SESSION['LOGEDUSN'];


?>

<HR>
<a href="http://localhost/dbms/booksearch.php">search book</a>
<a href="http://localhost/dbms/bookrequest.php">REQUEST book</a>
</body>
</html>