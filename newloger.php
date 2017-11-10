<?php
session_start();
	if(!ISSET($_SESSION['LOGEDNAME'])&& !isset($_SESSION['LOGEDUSN']))
	{
		echo("plz first login");	
		$_SESSION['login_error']="plz first login";
		header('Location: http://localhost/dbms/loginpage.php');
		exit();
	}
	
?>


<!DOCTYPE HTML>  
<html>
<head>
<title>SIR MVIT COLLEGE LIBRARY</title>
<style>
body{color:#3f312e;background:#2EB38E;font: 14px helvetica,arial,sans-serif;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
.dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding-RIGHT: 33PX;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color:#000;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 4px 4px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #FFF}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>

</head>
<body> 
<div id="header">

<H1 ALIGN="CENTER">SIR MVIT COLLEGE LIBRARY</H1>

</div><!--header-->
<hr>

	<ul>
	
	<li><a class="active" href="http://localhost/dbms/dbtrial2.php">HOME</a></li>
	<li><a href="http://localhost/dbms/bookrequest.php">BOOK REQUEST</a></li>
	<li><a href="http://localhost/dbms/booksearch.php">BOOK SEARCH</a></li>
	<li class="dropdown" style="float:right">
		<a href="javascript:void(0)" class="dropbtn">ACCOUNT</a>
		<div class="dropdown-content">
			<a href="#">BOOK RECORDS</a>
			<a href="#">UPDATE PROFILE</a>
			<a href="http://localhost/dbms/signout.php">SIGN OUT</a>
		</div>
	</li>
	</ul><!--navleft-->
	
<hr>
<div id="container">
<?PHP
echo $_SESSION['LOGEDNAME'];
echo"<br>";
echo $_SESSION['LOGEDUSN'];


?>
</div>
</body>
</html>
