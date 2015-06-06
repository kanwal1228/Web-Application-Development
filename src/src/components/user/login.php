<?php
defined("true-access") or die("No script kiddies please!");
include_once("common.php");
include_once("components/course/site.php");
/*
* Start up page layout layout
*/

/*
* Main function
*/
function view()
{
	startOfPage();
	$site = sitedetail();
	$siteTitle = $site['sitename'];
	$subtitle = $site['subtitle'];
	siteTitle($siteTitle);
	p($subtitle);
	users_renderLoginForm();
	users('Users');
	courses('Courses');
	endOfPage();
}

?>