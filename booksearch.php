<?PHP
ECHO <<<search
<!DOCTYPE HTML>  
<html>
<head>
<style>
body{color:#3f312e;background:#2EB38E;font: 14px helvetica,arial,sans-serif;}
#content{
	BACKGROUND-COLOR:#3D997F;
	width:100%;
	float:center;
	height:50px;
	padding-top:20px;
	padding-bottom:20px;

	border:2px solid green ;
}
input[type=text]
{
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
		<ul>
			<li><a class="active" href="http://localhost/dbms/lib_first.php">HOME</a></li>
			<li><a href="http://localhost/dbms/booksearch.php">BOOK SEARCH</a></li>
			<li><a href="http://localhost/dbms/dbtrial2.php">REGISTRATION</a></li>
			<li style="float:right"><a href="http://localhost/dbms/loginpage.php">LOGIN</a></li>
		</ul><!--navleft-->
			<hr>
<div id="content" align="center">
		<form action="booksearch.php" method ="POST">
			<input type="search"  name="SEARCH"              placeholder="  		search    	">
					<br>
				<lab for="option" style="float:left">SEARCH BY:</lab>
				<select name="OPTION" style="float:left">
				<option value="BOOKNAME">BOOKNAME</option>
				<option value="AUTHORNAME">AUTHORNAME</option>
				<option value="FIELD">FIELD</option>
				</select>
				<input style="float:right" type="submit"	value='SEARCH'>

		</form>
</div>


</body>
</html>
search;
$OPTION=$SEARCH="";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(!empty($_POST["SEARCH"]))
		{	$SEARCH=$_POST['SEARCH'];
			$OPTION=$_POST['OPTION'];
			$mysql_host='localhost';
			$mysql_user='root';
			$mysql_pass='';
			$mysql_db='mysql';
			if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass)&&mysql_select_db($mysql_db))
			{
			switch($OPTION)
			{
				CASE 'BOOKNAME':
					$QUERY12= "(SELECT bookname,authorname,bookavail FROM book_db WHERE bookname= '$SEARCH' )";
					break;
				
				CASE 'AUTHORNAME':
					$QUERY12= "(SELECT bookname,authorname,bookavail FROM book_db WHERE authorname= '$SEARCH' )";
					break;
					
				CASE 'FIELD' :
					$QUERY12= "(SELECT bookname,authorname,bookavail FROM book_db WHERE field= '$SEARCH' )";	
					BREAK;
			}
				if ($query_run=mysql_query($QUERY12))
				{	
					if(mysql_num_rows($query_run)==null)
					{
						echo '<BR> <BR>no book found!!!! <BR><BR>';
						$msg="no book found";
					}
					else 
					{
						While($row=mysql_fetch_assoc($query_run))
						{
							ECHO '<HR>';
							$BOOKNAME=$row['bookname'];
							$AUTHORNAME=$row['authorname'];
							$AVAILBOOK=$row['bookavail'];
							echo $BOOKNAME;
							ECHO '<BR>';
							ECHO "AUTHORNAME:".$AUTHORNAME;
							ECHO '<BR>';
							ECHO "NUMBER OF AVAILABLE:".$AVAILBOOK;
							ECHO '<BR>';
							
							
						}
					}		
				}
			}
			else
				die(mysql_error());
		}
		else
		{
			if(empty($_POST["SEARCH"]))
			ECHO'PLEASE ENTER WHAT YOU WANT TO SEARCH';
		}
	}
?>
<html>
<head>
<style>
footer
{
	padding-top:300px;
}
</style>
</head>
<body>
<script></script>

			
			<footer>
				<hr>
				<h5 align="center">copy rights are reserved</h5>
			</footer>
</body>
</html>