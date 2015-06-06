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
	$users = $data["user"];
	if (!empty($users))
	{
		foreach ($users as $user)
		{
			users_render($user);
		}
	}

	endContent();
	endOfPage();

}

/*
* users layout helpers
*/
function users_render($user)
{
	if(isset( $user['username']))
	{
		userDetail($user['username']." ".$user['email']);
	}
}


function viewRegistrations($data)
{
		
	startOfPage();
	startContent();
	$site = sitedetail();
	$siteTitle = $site['sitename'];
	$subtitle = $site['subtitle'];
	siteTitle($siteTitle);
	p($subtitle);
	users_renderLoginForm();
	$registrations = $data["registration"];
	if (!empty($registrations))
	{
		foreach ($registrations as $registration)
		{
			users_registration($registration);
		}
	}

	endContent();
	endOfPage();

}

function users_registration($registration)
{
	if(isset( $registration['course']))
	{
		p($registration['course_Desc']." ".$registration['course_Num']);
	}
}




?>