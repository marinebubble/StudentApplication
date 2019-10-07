<?php
	// yang penting
	require_once('StudentSession.php');
	require_once('StudentLoginManager.php');
	
	$user_logout = new StudentLoginManager();
	
	
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user_logout->doLogout();
		$user_logout->redirect('WelcomePage.php');
		exit();
	}
?>