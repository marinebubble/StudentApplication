<?php
	require_once('sessionLect.php');
	require_once('LectLoginManager.php');
	$user_logout = new LecturerLoginManager();
	
	
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user_logout->doLogout();
		$user_logout->redirect('test.php');
	}
?>