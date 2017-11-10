<?php	$mysql_host='localhost';
		$mysql_user='root';
		$mysql_pass='';
		$mysql_db='mysql';
		if($conn=mysql_connect($mysql_host,$mysql_user,$mysql_pass)&&mysql_select_db($mysql_db))
			$faltu=0;
		else
			die(mysql_error());

?>