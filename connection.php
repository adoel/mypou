<?php 

	$host	= "localhost";
	$user	= "root";
	$pass	= "password";
	$dbname	= "my_pou";
	
	$connection = mysql_connect($host, $user, $pass);
	
	if($connection) {
		$db = mysql_select_db($dbname);	
	} else {
		echo "error!";
	}
	
?>