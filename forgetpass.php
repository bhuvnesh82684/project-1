<?PHP
SESSION_START();
require "conedb.php";
ECHO  $_SESSION['FUSN'];
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$FUSN=$_POST['FUSN'];
	$FPHONE=$_POST['FPHONE'];
	if(!empty($FUSN)&&!EMPTY($FPHONE))
	{
		$QUERY= "(SELECT username,idnum FROM client_db WHERE phone='$FPHONE' && idnum='$FUSN' )";
				if ($query_run=mysql_query($QUERY))
				{	
					if(mysql_num_rows($query_run)==null)
						echo 'sorry !! you are not recoznised by system';	
					else 
					{	
						$row=mysql_fetch_assoc($query_run);
						$FUSERNAME=$row[username];
						$FUSN=$row[idnum];
						$_SESSION[FUSN]=$FUSN;
						$_SESSION['LOGEDNAME']=$FUSERNAME;
					    HEADER('Location: http://localhost/dbms/forgetpass2.php');
						exit(); 
					}
				}
				ELSE
					ECHO 'NOT CONNECTED';
	}
	ELSE
		ECHO 'PLZ ENTER THE VALID USERNAME AND PASSWORD';
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
		<form action="forgetpass.php" method ="POST">
			
			<input type="TEXT" id="username" name='FUSN' placeholder="                 USN        ">
			<br><BR>
			
			
			<input type="PASSWORD" id="password" name='FPHONE' placeholder="               PHONE      ">
			<br>
			<BR>
			<input align="center" type="submit"	value='log in'>
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

