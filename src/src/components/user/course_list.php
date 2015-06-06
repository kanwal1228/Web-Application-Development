<?php
defined("true-access") or die("No script kiddies please!");
include_once("common.php");
include_once("components/course/site.php");
/*
* Main function
*/
function view($data)
{
		
	startOfPage();
	startContent();
	$site = sitedetail();
	$siteTitle = $site['sitename'];
	$subtitle = $site['subtitle'];
	siteTitle($siteTitle);
	p($subtitle);
	users_renderLoginForm();
	$courses = $data["course"];
	if (!empty($courses))
	{
		foreach ($courses as $course)
		{
			courses_render($course);
		}
	}

	endContent();
	endOfPage();

}

/*
* courses layout helpers
*/
function courses_render($course)
{
	if(isset( $course['course_Num']))
	{
		courseDetail($course['course_Num']." ".$course['course_Desc']);
	}
}

function course_registerForm($course) {

	echo '<form id="Register for '.$course['course_Num'].'" action="index.php?option=user&view=register" method="POST">       '.PHP_EOL;
	echo '	<input name="username" type="hidden" value="'.$_SESSION['user'].'"/>'.PHP_EOL;
	echo '	<input name="course" type="hidden" value="'.$course['course_Num'].'"/>'.PHP_EOL;
	echo '	<input type="submit" value="Register"/>                     '.PHP_EOL;
	echo '</form> ';    
}

function viewDetail($data)
{
		
	startOfPage();
	startContent();
	$siteTitle = "Blackboard";
	$subtitle = "Welcome to ".$siteTitle;
	siteTitle($siteTitle);
	p($subtitle);
	users_renderLoginForm();
	$course = $data;
	if (!empty($course))
	{
		course_Details($course);
	}

	endContent();
	endOfPage();

}

function course_Details($course)
{
	if(isset( $course['course_Num']))
	{
		p($course['course_Num']." ".$course['course_Desc']." Credits - ".$course['credit_Hours']);
	}
	if(users_loggedIn())
	{
		course_registerForm($course);
	}
}


?>