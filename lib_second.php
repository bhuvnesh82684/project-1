<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<head>
<title>SIR MVIT COLLEGE LIBRARY</title>
<style>
</style>

</head>
<body> 
<div id="header">

<H1 ALIGN="CENTER">SIR MVIT COLLEGE LIBRARY</H1>

</div><!--header-->
<hr>

<?php
$USERNAME=$PASSWORD="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$USERNAME=$_POST['LOGINNAME'];
	$PASSWORD=$_POST['CODEWORD'];
	if(!empty($USERNAME)&&!EMPTY($PASSWORD))
	{
		IF(($USERNAME=='ASHUTOSH')&&($PASSWORD=='LINDA'))
		{
			HEADER('Location: http://localhost/adminpage.php');
			exit();
		}
		ELSE
		{
			$mysql_host='localhost';
			$mysql_user='root';
			$mysql_pass='';
			$mysql_db='mysql';
			if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass)&&mysql_select_db($mysql_db))
			{	
				$QUERY= "(SELECT username,idnum FROM client_db WHERE USERNAME ='$USERNAME' && PASSWORD ='$PASSWORD' )";
				if ($query_run=mysql_query($QUERY))
				{	
					if(mysql_num_rows($query_run)==null)
						echo 'PLZ CHECK YOUR PASSWORD/USERNAME';	
					else 
					{	
						$row=mysql_fetch_assoc($query_run);
						$LOGNAME=$row['username'];
						$USN=$row['usn'];
						$_SESSION['LOGEDNAME']=$LOGNAME;
						$_SESSION['LOGEDUSN']=md5($USN);
						HEADER('Location: http://localhost/userpage.php');
						exit();
					}
				}
				ELSE
					ECHO 'NOT CONNECTED';
			}
			else
				die(mysql_error());
		}
	}
	ELSE
		ECHO 'PLZ ENTER THE VALID USERNAME AND PASSWORD';
}
?>
		<form action="lib_second.php" method ="POST">
			username:<input type="TEXT" name='LOGINNAME'>
			password:<input type="PASSWORD" name='CODEWORD'>
			<BR>
			<input type="submit"	value='log in'>
		</form>
				<a href="http://localhost/dbtrial2.php">REGISTRATION</a>

</body>
</html>