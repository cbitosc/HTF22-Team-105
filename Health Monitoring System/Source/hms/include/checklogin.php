<?php
function check_login()
{
	// if no user login case establish a proxy connection
if(strlen($_SESSION['login'])==0)
	{	
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="./user-login.php";		
		header("Location: http://$host$uri/$extra");
	}
}
?>