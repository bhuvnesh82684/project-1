<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
<?php
echo'book selected is';
?>
<FORM ACTION="bookrequest.php" METHOD="POST">
book:<input type="text" name="bookname">
usn:<input type="text" name="usn">
date of issue:<input type="date" name="dateisu">
<input type="submit" value="book request">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(!empty($_POST["bookname"])&&!empty($_POST["usn"])&&!empty($_POST["dateisu"]))
	{	$bookname=$_POST['bookname'];
		$usn=$_POST['usn'];
		$dateisu=$_POST['dateisu'];
		$mysql_host='localhost';
		$mysql_user='root';
		$mysql_pass='';
		$mysql_db='mysql';
		if($_SESSION['LOGEDUSN']==$usn)
		{	
			$sql="INSERT INTO bookrequest(bookname,usn,dateisu,dateret)VALUES ('$bookname','$usn','$dateisu','$dateret')";
			if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass)&&mysql_select_db($mysql_db)&&mysql_query($sql))
			{	
					
				HEADER('Location: http://localhost/userpage.php');
				exit();
			}
			else
				die(mysql_error());
	}


	
	}
}

?>
</body>
</html>
 