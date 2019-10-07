<?php

	require_once("sessionLect.php");
	
	require_once("LectLoginManager.php");
	//$auth_user = new LecturerLoginManager();
	
	
		//$user_id = $_SESSION['user_session'];
	
	//$stmt = $auth_user->runQuery("SELECT LecturerFName FROM Lecturer WHERE LecturerID=$user_id");
	//$stmt->execute(array($user_id));
	
	//$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	//$user = $userRow['LecturerFName'];
	
?>
<!DOCTYPE html>
	<html>
		<head>
			
			<title>FEATURES</title>
		
		<style>
		body{
		font-family:"Typo Round";
		
	}
	@font-face 
			{
				font-family:"Typo Round";
				src:url("Typo_Round_Regular_Demo.otf") format("opentype");
				font-weight:normal;font-style:normal;
			}
		
		#pict4{
		
		right:80px;}
		
		#pict6{
		
		left:80px;}
		
		#pict4, #pict5, #pict6
		{
			position: relative;
			top: 200px;
		}
		
		#sche
		{
			top:150px;
			right:115px;
			position: relative;	
		}
		
		#schedupdate
		{
			top:150px;
			right:20px;
			position: relative;
		}
		
		#ccl
		{
			top:150px;
			left:130px;
			position: relative;
		}
		
		.logout{
			position: relative;
			float: right;
		}
		</style>

		</head>

	<body>
		<div class="logout">
			<a href="logout.php?logout=true">Sign Out</a>
		</div>
		<center>
		
	<?php
		$name = "Jacky";

		echo "Hello ".$name." today's date is ".date("d/m/y");

		date_default_timezone_set('Asia/Jakarta');
		$currentTime = date("H");
		echo "<br/>";
		echo getTimeStatus($currentTime);
	?>

	<?php
		function getTimeStatus($t) {
		if ($t > 5 && $t <= 12) {
			return "Good Morning";
		} 
		if ($t > 12 && $t <=16) {
			return "Good afternoon";
		}
		if ($t > 16 && $t <= 20) {
			return "Good evening";
		}	
		return "Good night";
		}
	?>
		
		<table>
		<tr> 
			<td> 
			
			<input id="pict4" type="image" src="lectpage/schedule.png" height="250" width="250" value="schedule1" />
			
			</td> 
		
			<td>
			<input id="pict5" type="image" src="lectpage/updateschedule.png" height="200" width="200" value="scheduleupdate" />
			</td>
		
			<td>
			<a href="bookmeeting.html">
				<input id="pict6" type="image" src="lectpage/cancel.png" height="200" width="200" value="cancel" />
			</a>
			</td> 
		</tr>
		
		<tr>
			<td> <h1><a id="sche">View Today's Schedule</a></h1> </td>
			<td> <h1><a id="schedupdate">Update Schedule</a></h1> </td>
			
			<td> <h1><a id="ccl">Cancel</a></h1> </td>
		</tr>
		</table>
		
		</center>
	</body>
</html>

