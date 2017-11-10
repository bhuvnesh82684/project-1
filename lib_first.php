<!DOCTYPE HTML>  
<html>
	<head>
		<script type="text/javascript">
			<!-->
			var image1= new Image()
			image1.src="library21.JPG"
			var image2= new Image()
			image2.src="3.jpg"
			//-->
		</script>
		<title>SIR MVIT COLLEGE LIBRARY</title>
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
		<div id="container">
			<img src="library1.JPG" name="slide" width="100%" height="600">
			<script type="text/javascript">
			<!--
				var step=1
				function slideit()
				{
					document.images.slide.src=eval("image"+step+".src")
					if(step<2)
					step++
					else
					step=1
					setTimeout("slideit()",2800)
				}
				slideit()
				//-->
			</script>
				<br>
		</div>
		<footer>
			<hr>
			<h5 align="center">copy right reserved</h5>
		</footer>
	</body>
</html>