<?php

if (!defined("true-access"))
{
	die("cannot access");
}

include_once("common.php");
/*
* courses registration database
*/

function course_register($course, $username)
{
	list($dbc, $error) = connect_to_database();
	
	$course_safe = mysqli_real_escape_string($dbc, $course); //protect ourselves
	$username_safe = mysqli_real_escape_string($dbc,$username); //protect ourselves
	//$now = new date();

	//check if records exits
	$result = mysqli_query($dbc,"select * from course_reg where usernname ='$username_safe' and course ='$course_safe'");
	if(!$result)
	{
		$results = mysqli_query($dbc,"insert ignore into course_reg (username, course) values ('$username_safe','$course_safe')");
	}
	return $results;
}

function register_getAll($username)
{
	list($dbc, $error) = connect_to_database();

	$username_safe = mysqli_real_escape_string($dbc,$username); //protect ourselves
	
	$results = mysqli_query($dbc,"select * from course_reg join courses on course_reg.course = courses.course_Num where username='$username_safe'");
	
	$allregistrations = array();
	
	if ($results)
	{
		while ($registration = mysqli_fetch_array($results,MYSQLI_ASSOC))
		{
			$allregistrations[] = $registration;
		}
	}
	
	return $allregistrations;
}


?>