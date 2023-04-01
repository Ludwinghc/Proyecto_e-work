<?php 
	$conex = new MySQLi("localhost","root","","eWork");
	if($conex -> connect_errno){
		die("Error connecting to : (". $conex->connect_error);
	}
?>