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
	if ($view == "list")
		return "execute_course_list";
	else if ($view == "ulist")
		return "execute_user_list";
	else if ($view == "login")
		return "execute_login";
	else if ($view == "logout")
		return "execute_logout";
	else if ($view == "register")
		return "execute_registration";
	else if ($view == "userdetail")
		return "execute_userdetail";
	else if ($view == "coursedetail")
		return "execute_coursedetail";
	else if ($view =="register")
		return "execute_registration";
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


function execute_course_list()
{
	include_once("user/course_list.php");
	$data = array();
	$data["course"] = course_getAll();
	view($data);
}

function execute_coursedetail()
{
	include_once("user/course_list.php");
	$data = course_dfetch($_GET['course']);
	viewDetail($data);
}


function execute_user_list()
{
	include_once("user/users.php");
	$data = array();
	$data["user"] = users_getAll();
	view($data);
}

function execute_userdetail()
{
	include_once("user/users.php");
	$data = array();
	$data["registration"] = register_getAll($_GET['user']);
	viewRegistrations($data);
}

function execute_login()
{
	include_once("user/login.php");
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$success = users_checkExists($password,$username);
		$_SESSION['user'] = $username;
		if($success)
		{
			view();	
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

function execute_registration()
{
	include_once("user/login.php");
	include_once("course/registration.php");
	$course = $_POST['course'];
	$username = $_POST['username'];
	course_register($course,$username);	
	view();
}


?>