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
			background-color:lightgrey;
			width:100%;
		}
		footer
		{
			padding-top:300px;
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
			<li><a href="http://localhost/dbms/adminpage.php">HOME</a></li>
				<li><a href="http://localhost/dbms/searchadmin.php">SEARCH BOOK</a></li>
				<li><a href="http://localhost/dbms/issuebook.php">ISSUE BOOK</a></li>
				<li><a href="http://localhost/dbms/booksearch.php">REQUEST RECORDS</a></li>
				<li style="float:right"><a href="http://localhost/dbms/booksearch.php">ADMIN ACCOUNT</a></li>
		</ul><!--navleft-->
			<hr>
		
<?PHP
$BOOKNAME=$AUTHORNAME=$AVAILBOOK=$TOTALBOOK=$FIELDD="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(!empty($_POST["BOOKNAME"])&&!empty($_POST["AUTHORNAME"])&&!empty($_POST["FIELD"])&&!empty($_POST["TOTALBOOK"]))
	{	$BOOKNAME=$_POST['BOOKNAME'];
		$AUTHORNAME=$_POST['AUTHORNAME'];
		$TOTALBOOK=$_POST['TOTALBOOK'];
		$FIELD=$_POST['FIELD'];
		$AVAILBOOK=$TOTALBOOK;
		$mysql_host='localhost';
		$mysql_user='root';
		$mysql_pass='';
		$mysql_db='mysql';
		if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass))
		echo 'connected';
		else
		die(mysql_error());
		echo'<br>';

		if(mysql_select_db($mysql_db))
		echo'databse connected';
		else
		die(mysql_error());
		$sql="INSERT INTO book_db(bookname,authorname,field,bookavail,totalbook)
		VALUES ('$BOOKNAME','$AUTHORNAME','$FIELD',$AVAILBOOK,$TOTALBOOK)";
		if (mysql_query($sql)) 
		{		
			HEADER('Location: http://localhost/dbms/adminpage.php');
			exit();
		}
		else
			die(mysql_error());
		
	
	}
	else
	{
	if(empty($_POST["BOOKNAME"]))
		ECHO'PLEASE ENTER THE USERNAME';
	
	
	if(empty($_POST["AUTHORNAME"]))
		ECHO'PLEASE ENTER THE PASSWORD ';
	

	if(empty($_POST["FIELD"]))
		ECHO'PLEASE ENTER THE EMAIL';
	
	
	if(empty($_POST["TOTALBOOK"]))
		ECHO'PLEASE ENTER THE PHONE ';
	}
}

?>
<h1 align ="center">BOOK RECORDS FOR LIBRARY</h1>
<br>
<br>
<form action="bookrecord.php" method ="POST" ALIGN="CENTER" >
<input type="text" name='BOOKNAME'placeholder="	BOOK NAME">

<br>
<br>
<input type="text" name='AUTHORNAME' placeholder="	AUTHOR NAME">
<br>
<br>
<input type="TEXT" name ='FIELD' placeholder="	FIELD">
<br>
<br>
<input type="number" name='TOTALBOOK' min='1' max="1000" placeholder="TOTAL BOOK" >
<br>
<br>
   <input type ='HIDDEN' name ="AVAILBOOK">

	
<input type="submit"	value='ADD'>

</form>

		<footer>
			<hr>
			<h5 align="center">copy right reserved</h5>
		</footer> 
</body>
</html>