<?php
	## db_connection.php - function for connecting to the "meso" database

	function testdb_connect(){
		$dbh = new PDO('mysql:host=localhost;dbname=meso;charset=utf8mb4', 'root', '');
		return $dbh;
	}
?>