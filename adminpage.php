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
		.main
		{
			width:100%;
			height:400px;
			border:5px solid black;			
		}		
		.left
		{
			float:left;
			width:69%;
			height:400px;
		
		}
		.right
		{
			float:left;
			width:29%;
			height:400px;
		
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
			<li><a href="http://localhost/dbms/bookrecord.php">ADD BOOK</a></li>
				<li><a href="http://localhost/dbms/searchadmin.php">SEARCH BOOK</a></li>
				<li><a href="http://localhost/dbms/issuebook.php">ISSUE BOOK</a></li>
				<li><a href="http://localhost/dbms/booksearch.php">REQUEST RECORDS</a></li>
				<li style="float:right"><a href="http://localhost/dbms/booksearch.php">ADMIN ACCOUNT</a></li>
		</ul><!--navleft-->
			<hr>
		<div class="main">
			<div class="left" >
				<h3>show the list of students who will return book today<h3>
			</div>
			<div class="right">
				shows the content 
			</div>
		</div>
<footer align="center">
	<b>	@copy; copy right are reserved</b>
</footer>
</body>
</html>