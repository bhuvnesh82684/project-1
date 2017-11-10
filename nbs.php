
<!DOCTYPE html>
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
		#srchspace
		{
			width:100%;
			height:60px;
			float:center;
		}
		#result
		{
			width:100%;
			min-height:400px;
			border:2px solid black;
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
		</div>
		<hr>
		<div id="srchspace" align="center">
			<form action="nbs.php" method ="POST">
				<input type="search"  name="SEARCH" placeholder="  		search    	">
					<br>
					<select name="OPTION" style="float:left">
					<option value="null">search by:</option>
					<option value="BOOKNAME">BOOK NAME</option>
					<option value="AUTHORNAME">AUTHOR NAME</option>
					<option value="FIELD">FIELD</option>
				</select>
				<input style="float:right" type="submit"	value='SEARCH'>
			</form>
		</div>
		<hr>
		<div id="result">
		<?php
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
						echo 'no book found';
					else 
					{
						While($row=mysql_fetch_assoc($query_run))
						{
						
							$BOOKNAME=$row['bookname'];
							$AUTHORNAME=$row['authorname'];
							$AVAILBOOK=$row['bookavail'];
							echo $BOOKNAME;
							ECHO '<BR>';
							ECHO "AUTHORNAME:".$AUTHORNAME;
							ECHO '<BR>';
							ECHO "NUMBER OF AVAILABLE:".$AVAILBOOK;
							ECHO '<BR>';
							ECHO '<HR>';
							
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
		</div>
		<footer align="center">
			copy right are reserved
		</footer>
	</body>
</html>