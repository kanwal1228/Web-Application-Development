<?php
if (!defined("true-access"))
{
	die("cannot access");
}
include_once("common.php");
/*
* courses database
*/

function course_getAll()
{
	$courses[] = array();
	list($dbc,$error) = connect_to_database();
	if ($dbc)
	{
		$query = "SELECT courses.id, course_Num, course_Desc, credit_Hours FROM COURSES;";
		
		$result = mysqli_query($dbc,$query);

		if ($result)
		{
			while ($course = mysqli_fetch_array($result))
			{
				$courses[] = $course;
			}
		}
	}
	return $courses;
}

function course_dfetch($course)
{
	list($dbc,$error) = connect_to_database();
	if ($dbc)
	{
		$query = "SELECT courses.id, course_Num, course_Desc, credit_Hours FROM COURSES where course_Num='$course';";
		
		$result = mysqli_query($dbc,$query);

		if ($result)
		{
			$course = mysqli_fetch_array($result);
		}
	}
	return $course;
}

?>