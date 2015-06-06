<?php
if (!defined("true-access"))
{
	die("cannot access");
}
/*
* common database code
*/

if (!defined("true-access"))
{
	die("cannot access");
}

include_once("../src/config.php");

function connect_to_database($database = DB)
{
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,$database);
	$error = "";
	
	if ($dbc)
	{
		//good news everyone!
		mysqli_set_charset($dbc,"utf8");
	}
	else
	{
		$error = mysqli_connect_error();
	}
	
	return array($dbc,$error);
}
?>