<?php
	$dbhost  = 'localhost';
	$dbname  = 'db';
	$dbuser  = 'root';
	$dbpass  = '';
	
	$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	
	function createTable($name, $query)
	{
		queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
	}
	
	function queryMysql($query)
	{
		global $connection;
		$result = $connection->query($query);
		
		return $result;
	}
?>