<?php
defined("true-access") or die("No script kiddies please!");
include_once("common.php");
include_once("../admin/components/course/site.php");
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
	endOfPage();
}

function view_admin($username)
{
	startOfPage();
	$site = sitedetail();
	$siteTitle = $site['sitename'];
	$subtitle = $site['subtitle'];
	siteTitle($siteTitle);
	p($subtitle);
	users_renderLoginForm();
	if($username == 'admin')
	{
		admin_form();
	}	
	endOfPage();
}

?>