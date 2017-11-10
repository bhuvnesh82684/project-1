<?php
	session_start();
	require  'conedb.php';
	$USERNAME=$PASSWORD=$EMAIL=$PHONE=$USN=$BRANCH=$COURSE=$BOOKISU=$BOOKREQ=$LIBRARYCARD="";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(!empty($_POST["USERNAME"])&&!empty($_POST["PASSWORD"])&&!empty($_POST["EMAIL"])&&!empty($_POST["PHONE"])&&
		!empty($_POST["USN"]))
		{	
			$USERNAME=$_POST['USERNAME'];
			$PASSWORD=$_POST['PASSWORD'];
			$EMAIL=$_POST['EMAIL'];
			$PHONE=$_POST['PHONE'];
			$USN=$_POST['USN'];
			$BRANCH=$_POST['BRANCH'];
			$COURSE=$_POST['COURSE'];
			$BOOKISU=$_POST['BOOKISU'];
			$BOOKREQ=$_POST['BOOKREQ'];		

			$LIBRARYCARD=md5($USN);
			$sql="INSERT INTO client_db(idnum,username,password,email,phone,librarycard,bookisu,bookreq)
				VALUES ('$USN','$USERNAME','$PASSWORD','$EMAIL',$PHONE,'$LIBRARYCARD',$BOOKISU,$BOOKREQ)";
			if(mysql_query($sql))
			{	
				$_SESSION['LOGEDNAME']=$USERNAME;	
				$_SESSION['LOGEDUSN']=$USN;
				HEADER('Location: http://localhost/dbms/newloger.php');
				exit();
			}
			else
				die(mysql_error());
		}
		else
		{
		if(empty($_POST["USERNAME"]))
			ECHO'PLEASE ENTER THE USERNAME';
		if(empty($_POST["PASSWORD"]))
			ECHO'PLEASE ENTER THE PASSWORD ';
		if(empty($_POST["EMAIL"]))
			ECHO'PLEASE ENTER THE EMAIL';
		if(empty($_POST["PHONE"]))
			ECHO'PLEASE ENTER THE PHONE ';
		if(empty($_POST["USN"]))
			ECHO 'PLEASE ENTER THE USN';
		if(empty($_POST["BRANCH"]))
			ECHO'PLEASE ENTER THE BRANCH';
		}
	}

echo <<<registration
<!DOCTYPE HTML>  
<html>
	<head>
		<style>
			body
			{
				color:#3f312e;
				background:#2EB38E;
				font: 14px helvetica,arial,sans-serif;
			}
			#header
			{
				width:100%;
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
			#libraryname
			{
			width:100%;
			height:100px;
			float:center;
			font: 25px helvetica,arial,sans-serif;
			color:#3f312e;
			}
			ul
			{
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333
			}
			li
			{
			float: left;
			}
			li a 
			{
			display: block;
			color: white;
			text-align: center;
			padding-top:15px;
			padding-bottom:15px;
			padding-right:20px;
			padding-left:20px;
			text-decoration: none;
			}
			li a:hover 
			{
			background-color: #000;
			}
			#container
			{ 
				padding:15px;
				width: 100%;
				max-height:400px;
			}
			#form
			{
				BACKGROUND-COLOR:#3D997F;
				width:40%;
				float:center;
				max-height:400px;
				padding:25px;
				border:2px solid green ;
			}
			input[type=text]
			{
				float:center;
			}
		</style>
	</head>
	<body> 
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
			<ul>
				<li><a class="active" href="http://localhost/dbms/lib_first.php">HOME</a></li>
				<li><a href="http://localhost/dbms/booksearch.php">BOOK SEARCH</a></li>
				<li><a href="http://localhost/dbms/dbtrial2.php">REGISTRATION</a></li>
				<li style="float:right"><a href="http://localhost/dbms/loginpage.php">LOGIN</a></li>
			</ul><!--navleft-->
				<hr>
			<div id="container" align="center">
				<div id="leftcontent">
				</div>
				<div id="form" align="center" >
					<h1>REGISTRATION FORM FOR STUDENT</h1>
						<hr>
					<form action="dbtrial2.php" method ="POST" >
						<input type="text" name='USERNAME' placeholder="	    USERNAME" >
							<br><BR>
						<input type="password" name='PASSWORD' placeholder="	    PASSWORD">
							<br><BR>
						<input type="email" name ='EMAIL' placeholder="		EMAIL">
							<br><BR>
						<input type="tel" name='PHONE' placeholder="	       PHONE" >
							<br><BR>
						<input type ='tel' name ="USN" placeholder="		  USN" >
							<br><BR>
						<input type='hidden' value='0' name='BOOKISU'>
						<input type='hidden' value='0' name='BOOKREQ'>
						BRANCH:
						<select name="BRANCH"  >
							<option value="cse">CSE</option>
							<option value="ins">INS</option>
							<option value="ece">ECE</option>
							<option value="eee">EEE</option>
							<option value="bio">BIO</option>
							<option value="mec">ME</option>
							<option value="civ">CE</option>
							<option value="ime">IME</option>
							<option value="tele">TELE</option>
						</select>
							<br>
							<BR>
						COURSE:
						<select name="COURSE" >
							<option value="be">BE</option>
							<option value="mba">MBA</option>
							<option value="arc">ARCH.</option>
						</select>
							<br>
							<BR>
						<input type="submit" value='sign up'>
					</form>
				</div>
				<div id="rightcontent">
				</div>
			</div>
			<hr>
			
			<footer>
				<h5 align="center">copy rights are reserved</h5>
			</footer>
		</body>
	</html>
registration;
?>