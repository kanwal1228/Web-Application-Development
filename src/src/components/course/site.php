<?php
if (!defined("true-access"))
{
	die("cannot access");
}

include_once("common.php");

/**
* Check if a user exists in the database, adds user to session if exists
*/

function sitedetail()
{
	list($dbc,$error) = connect_to_database();
	if ($dbc)
	{
		$query = "SELECT sitedetail.sitename, subtitle FROM sitedetail;";
		
		$result = mysqli_query($dbc,$query);

		if ($result)
		{
			$site = mysqli_fetch_array($result);
		}
	}
	return $site;
}

function updateSite($sitename,$subtitle)
{
	list($dbc,$error) = connect_to_database();
	if ($dbc)
	{
		$query = "UPDATE sitedetail set sitename='$sitename', subtitle='$subtitle' where 1;";
		
		$result = mysqli_query($dbc,$query);

	}
	return $result;
}


?>