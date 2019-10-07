<?php

	require_once("StudentSession.php");
	
	require_once("StudentLoginManager.php");
	$auth_user = new StudentLoginManager();
	
	// 
	$user_id = $_SESSION['user_session'];
	
	$stmt = $auth_user->runQuery("SELECT StudentFName FROM Student WHERE StudentID=$user_id");
	$stmt->execute(array($user_id));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
	$user = $userRow['StudentFName'];
	
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
		
		#pict1{
		
		right:80px;}
		
		#pict3{
		
		left:80px;}
		
		#pict1, #pict2, #pict3
		{
			position: relative;
			top: 200px;
		
		}
		
		#find
		{
			top:200px;
			right:80px;
			position: relative;
			
			
		}
		
		#sched
		{
			top:200px;
			left:40px;
			position: relative;
		}
		
		#book
		{
			top:200px;
			left:80px;
			position: relative;
		}
		</style>

		</head>

	<body>
	<div class="logout">
			<a href="logout.php?logout=true"><input type="button" value="Sign Out"></a>
		</div>
		<center>
		
<?php
//$name = "Jacky";

echo "Hello ".$user." today's date is ".date("d/m/y");

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
			<a href="lect.php">
			<input id="pict1" type="image" src="find_lecturer.png" height="190" width="200" value="find_lecturer" />
			</a>
			</td> 
		
		<td>
		<a href="ViewScheduleForm.php">
		<input id="pict2" type="image" src="schedule.png" height="200" width="200" value="schedule" />
		</a>
		</td>
		
		<td>
		<a href="BookMeeting.php">
		<input id="pict3" type="image" src="meeting.png" height="200" width="200" value="meeting" />
		</a>
		</td> 
		
		</tr>
		
		<tr>
		<td><h1><a id="find">Find Lecturer</a></h1></td>
			
			
			<td>
			<h1><a id="sched">Schedule</a></h1>
			</td>
			
			<td>
			<h1><a id="book">Book Meeting</a></h1>
			</td>
		</tr>
		</table>
		
			
			
	
		</center>
	</body>
</html>
