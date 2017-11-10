<!DOCTYPE HTML>
<html>
	<head>
		<style>
			body
			{
				color:#000000;
				background:#EDF5F4;
				font:20px helvetica,arial,sans-serif;
			}
			.header
			{
				float:left;
			}
			img
			{
				width:100%;
				height:100%;
			}
			#headerleft
			{
				width:10%;
				height:140px;
				text-align:center;
				background:#000000;	
				
			}
			#headercenter
			{	
				color:#000000;
				font:60px auto helvetica,arial,sans-serif;
				text-align:center;   
				width:90%;
				height:60px;
				background:#fff;
				padding-top:40px;
				padding-bottom:40px;

			}
			#navigation
			{	
				border:2px solid black;
				width: 100%;
				height:40px;
				background:#fff;
			}
			div ul li
			{	
				font:20px auto helvetica,arial,sans-serif;			
				float:left;
				background-color:#000fff;
				display:block;
				padding-top:10px;
				padding-bottom:10px;
			}
			#content
			{	
				background:#FFffff;
				width:100%;
				height:400px;
				border:2px solid blue;
			}
		</style>
	</head>
	<body>
		<div  id="header">
			<div id="headerleft"class="header" >
				<img src="college logo.jpg">
			</div>
			<div id="headercenter"class="header" align="center"> 
			SIR MVIT COLLEGE LIBRARY
			</div>
			
		</div>
		<div id="navigation" class="header">
			<ul>
				<li><a href="http://localhost/dbms/bookrecord.php">add book</a></li>
				<li><a href="http://localhost/dbms/booksearch.php">search book</a></li>
				<li><a href="http://localhost/dbms/booksearch.php">ISSUE BOOK</a></li>
				<li><a href="http://localhost/dbms/booksearch.php">REQUEST RECORDS</a></li>
				<li style="float:right"><a href="http://localhost/dbms/booksearch.php">admin account</a></li>
				
			</ul>
		</div>
		<div id="content" CLASS="header">
		
			<div id="leftbox">
			</div>
			<div id="centerbox">
			</div>
			<div id="rightbox">
			</div>
		</div>
		<footer style="float:left">
			this is end of page
		</footer>
	</body>
</html>
