<?php
if (!defined("true-access"))
{
	die("cannot access");
}

include_once("common.php");

/**
* Check if a user exists in the database, adds user to session if exists
*/
function users_checkExists($username, $password)
{
	list($dbc,$error) = connect_to_database();
	$success = false;
	if ($dbc)
	{
		$username_safe = mysqli_real_escape_string($dbc,$username);
		$password_safe = mysqli_real_escape_string($dbc,sha1($password.SALT));
	
		$query = "SELECT * from users where username='$username_safe' AND password='$password'";	
		$result = mysqli_query($dbc,$query);
		
		if ($result)
		{
			//aha we found you!
			
			while($user = mysqli_fetch_array($result,MYSQLI_BOTH))
			{
				$_SESSION['user'] = $user;
				$success = true;
			}
			
			
		}
		else
		{
			//bad, wrong username or password
		}
	}
	return $success;
}

function users_getAll()
{
	$users[] = array();
	list($dbc,$error) = connect_to_database();
	if ($dbc)
	{
		$query = "SELECT users.username, email FROM USERS;";
		
		$result = mysqli_query($dbc,$query);

		if ($result)
		{
			while ($user = mysqli_fetch_array($result))
			{
				$users[] = $user;
			}
		}
	}
	return $users;
}

function user_enrollment()
{
	list($dbc,$error) = connect_to_database();
	if ($dbc)
	{
		$query = "SELECT users.username, email FROM USERS;";
		
		$result = mysqli_query($dbc,$query);

		if ($result)
		{
			while ($user = mysqli_fetch_array($result))
			{
				$users[] = $user;
			}
		}
	}
	return $users;
}


?>