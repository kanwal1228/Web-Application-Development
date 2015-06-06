<?php
defined("true-access") or die("No script kiddies please!");

include_once("course/common.php");
include_once("course/courses.php");
include_once("course/registration.php");
include_once("course/users.php");
include_once("user/common.php");
$g_course;

/**
* Store component controller
*/
function get_view_enabled($view)
{
	if ($view == "login")
		return "execute_login";
	else if ($view == "logout")
		return "execute_logout";
	else
		return false;
}

function controller_route($view)
{
	if ($method = get_view_enabled($view))
	{
		$method(); //dynamic method invocation
	}
	else
	{
		die ("404 not found"); //this could be a view too!
	}
	
}


function execute_login()
{
	$success =false;
	include_once("user/login.php");
	include_once("course/site.php");
	if( isset( $_POST['sitename'] ))
	{
		$sitename =  $_POST['sitename'] ;	
		$subtitle = $_POST['subtitle'];	
		updateSite($_POST['sitename'],$_POST['subtitle']);			
	}
		
	if(!empty($_POST['username']) && $_POST['username']=='admin' && !empty($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$success = users_checkExists($password,$username);
		$_SESSION['user'] = $username;
		if($success)
		{
			view_admin($_POST['username']);	
		}
		else
		{
			execute_logout();
		}
 	}
	else
	{
		view();	
	}
		
}

function execute_logout()
{
	include_once("user/login.php");
	/*
	* Logout and clear the session submission page
	*/
	session_unset ();
	view();
}



?>