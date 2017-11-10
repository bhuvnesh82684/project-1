<?php
session_start();
require "conedb.php";
ECHO  $_SESSION['FUSN'];

if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(!empty($_POST["newpass"]))
		{	
			$FUSN=$_SESSION['FUSN'];
			$_SESSION['LOGEDUSN']=$FUSN;
			$NEWPASS=$_POST['newpass'];
             $sql ="UPDATE client_db SET password='$NEWPASS' WHERE idnum='$FUSN'";
			if(mysql_query($sql))
			{	
				
				HEADER('Location: http://localhost/dbms/newloger.php');
				exit();
			}
			else
				die(mysql_error());
		}

	}
echo <<<forget
<!DOCTYPE HTML>  
<html>
<head>
<style>
body{color:#3f312e;background:#2EB38E;font: 14px helvetica,arial,sans-serif;}

#container{ 
    padding:15px;
    width: 100%;
	height:400px;
	
}

#content{
	BACKGROUND-COLOR:#3D997F;
	width:30%;
	float:center;
	max-height:400px;
	padding-top:50px;
	padding-bottom:50px;
	padding-right:25px;
	padding-left:25px;
	border:2px solid green ;

}
input[type=text]{
	float:center;
}



</style>
</head>
<body >
<div id="head" align="center">
<h1>SIR MVIT COLLEGE LIBRARY</h1>
</div>
<hr>
<div id="container" align="center">
	<div id="leftcontain">
	
	</div>
	<vr>
	<div id="content" align="center">
		
		<form action="forgetpass2.php" method ="POST">
			<p>please enter new password</p>
			<input type="TEXT"  name='newpass' placeholder="             password       ">
			<br><BR>
			<input align="center" type="submit"	value='SUBMIT'>
			<br>
			<br>
		</form>
	</div>
	<vr>
	<div id="rightcontain" align="right">
	
	</div>
</div>
</body>

</html>
forget;
?>