<?php

require_once 'token.php';


$csrf_value = $_POST["token"];


if(isset($_POST['name']))
{
	if(csrf_token::check_csrf_token($csrf_value,$_COOKIE['csrf_cookie']))
	{
		
		echo "Details Submitted Succesfully";	
		
	}
	else
	{
		echo "CSRF Attck Detected request rejected";
	}
}

?>