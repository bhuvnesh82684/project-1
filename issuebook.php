<?php
include "conedb.php";
	if($_SERVER["REQUEST_METHOD"]="POST")
	{
		if(!empty($_POST['bookname'])&&!empty($_POST['usn'])&&!empty($_POST['issuedate']))
		{	
			/* issuedate store  the todays date*/
			$issuedate=date("y-m-d");
			$usn=$_POST['usn'];
			$bookname=$_POST['bookname'];
			/*$query is to check the no book avail for that type and no of book issued by user*/
			$query="(SELECT B.bookavail,C.bookisu FROM book_db B,client_db C WHERE bookname='$bookname' AND idnum='$usn')";
			if($row=(mysql_query($query)))
			{	
				$bookavai=mysql_fetch_assoc($row);
				if(($bookavai['bookavail']>0)&&($bookavai['bookisu']<4))					
				{	
					/*issuecode is primary key for book issue table but dont know how to get its unique value*/
					$issuecode=md5($bookname+$usn);
					$final =  strtotime("next month");
					/*$fianl stores the date one month from todays date ...so fon now this is the return time period*/
					$returndate=date("y-m-d",$final);
					$insert="INSERT INTO bookissue (ISSUE_CODE,BOOK_name,USN,ISSUE_DATE,RETURN_DATE)
					VALUES('$issuecode','$bookname','$usn','$issuedate','$returndate')";
				
					if($record=(mysql_query($insert)))
					{
						$bookuptd=$bookavai['bookavail'];
						$bookuptd--;
						/*$bookuptd is store the no of book available after issuing the book*/
						$update="UPDATE book_db SET bookavail=$bookuptd where bookname='$bookname'";
						if($updtrcd=(mysql_query($update)))
						{	
						
							$bookissu=$bookavai['bookisu'];
							$bookissu++;
							/*$bookissu is store the no of issued by the that user*/
							$updtclt="UPDATE client_db SET bookisu=$bookissu where idnum='$usn'";
							if((mysql_query($updtclt)))
								echo'book issue is updates';

						}

					}

				}

			}

		}
		
	}
	
?>
<!doctype html>
<html>
	<head>
		<style>
			body
			{
				color:#3f312e;
				background:#2EB38E;
				font: 14px helvetica,arial,sans-serif;
			}
			#content
			{
				BACKGROUND-COLOR:#3D997F;
				width:100%;
				float:center;
				height:150px;
				padding-top:20px;

				padding-bottom:20px;
				border:2px solid green ;
			}
			input[type=text]
			{
				float:center;
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
			<li><a href="http://localhost/dbms/bookrecord.php">ADD BOOK</a></li>
			<li><a href="http://localhost/dbms/searchadmin.php">SEARCH BOOK</a></li>
			<li><a href="http://localhost/dbms/booksearch.php">REQUEST RECORDS</a></li>
			<li style="float:right"><a href="http://localhost/dbms/booksearch.php">ADMIN ACCOUNT</a></li>
		</ul><!--navleft-->
		
															<hr>
															
		<div id="content" align="center">
			<form action="issuebook.php" method ="POST">
				<b >BOOK NAME:</b><input type="text" name="bookname" placeholder="	  bookname   	" >
															<br><br>
				<b >      USN:</b><input type="text"  name="usn" placeholder="		usn		">
															<br><br>
				<b>DATE OF ISSUE:</b><input type="date" name="issuedate" >
															<br>
				<b>DATE OF RETURN:</b><input type="date" name="returndate" >
															<br>
				<input type="submit" value="submit">
			</form>
		</div>
		<footer>
															<hr>
			<h5 align="center">copy rights are reserved</h5>
		</footer>
	</body>
</html>