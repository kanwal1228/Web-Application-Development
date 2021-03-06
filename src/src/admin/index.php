<?php
define("true-access", true);
session_start();
ob_start();
//ordinarily we would check the database using a core component for views to be registered
function get_option_enabled($option)
{
	if ($option == "components") //we have this component enabled (hard coded)
		return "components/controller.php";
	else
		return false;
}

//A Basic Router Function
//requires registering components and their router files
function route()
{
		//get query params from header
		$option = empty($_GET["option"]) ? "components" : $_GET["option"];
		$view = empty($_GET["view"]) ? "login" : $_GET["view"];
		
		//get files to include from database
		if ($controller = get_option_enabled($option))
		{
			//include correct router
			include_once($controller);
			controller_route($view); //router in controller should execute for a particular view - router in controller should implement function router_route($view)
		}
		else
		{
			die("404 - No Controller for specified option");
		}
}

//invoke basic router - the starting point of the journey
route();
ob_end_flush();


?>