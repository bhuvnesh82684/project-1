<?php
session_start();
REQUIRE 'conedb.php';
$USERNAME=$PASSWORD="";
if(isset($_SESSION['login_error']))
{$_SESSION['login_error']=null;
echo<<<error
<!DOCTYPE HTML> 
<html>
<head>
</head>
<body>
		<h3 id="login_error"> <h3>
	<script>
		document.getElementById("login_error").innerHTML="please login ";
	</script>
</body>
</html>
error;
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$USERNAME=$_POST['LOGINNAME'];
	$PASSWORD=$_POST['CODEWORD'];
	if(!empty($USERNAME)&&!EMPTY($PASSWORD))
	{
		IF(($USERNAME=='ASHUTOSH')&&($PASSWORD=='LINDA'))
		{
			HEADER('Location: http://localhost/dbms/adminpage.php');
			exit();
		}
		ELSE
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
						$USN=$row['idnum'];
						$_SESSION['LOGEDNAME']=$LOGNAME;
						$_SESSION['LOGEDUSN']=$USN;
						HEADER('Location: http://localhost/dbms/newloger.php');
						exit();
					}
				}
				ELSE
					ECHO 'NOT CONNECTED';
		}
	}
	ELSE
		ECHO 'PLZ ENTER THE VALID USERNAME AND PASSWORD';
}?>
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
	padding-top:20px;
	padding-bottom:50px;
	padding-right:25px;
	padding-left:25px;
	border:2px solid green ;

}
input[type=text]{
	float:center;
}
#header
		{	width:100%;
			height:100px;
			
		}
		#logo
		{  
			width:9%;
			float:left;
			height:100px;
		}
		#title
		{
			width:91%;
			float:right;
			height:60px;
			font: 60px helvetica,arial,sans-serif;
		    padding-top: 20px;
		}
		#footer
		{
			padding-top:80px;
		}

</style>
</head>
<body >
	<hr>
		<div id="header">
			<div id="logo" >
				<img src="college logo.jpg" width="120" height="100" />
			</div>
			<div id="title" align="center">
			SIR MVIT COLLEGE LIBRARY
			</div>
		</div><!--header-->
			<hr>
			
<div id="container" align="center">
	<div id="leftcontain">
	
	</div>
	<div id="content" align="center">
		<form action="loginpage.php" method ="POST">
							

							<h3>LOGIN FORM</h3>
			<input type="TEXT" id="username" name='LOGINNAME' placeholder="           USERNAME        ">
			<br><BR>
			
			
			<input type="PASSWORD" id="password" name='CODEWORD' placeholder="           PASSWORD      ">
			<br>
			<BR>
			<input align="center" type="submit"	value='log in'>
			<br>
			<br>
			<a href="http://localhost/dbms/forgetpass.php">forget password ?</a>
			<br><br>
			<hr>
			<br>
			<a href="http://localhost/dbms/dbtrial2.php">register</a>
		</form>
	</div>
	<vr>
	<div id="rightcontain" align="right">
	
	</div>
				<div id="footer">
			
			<hr>
				<h5 align="center">copy rights are reserved</h5>
			</div>
</div>
</body>
</html>
