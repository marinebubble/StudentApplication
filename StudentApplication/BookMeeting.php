<?php

	require_once('StudentSession.php');
	require_once('MeetingManager.php');
	$booking = new MeetingManager();
	//$list = $booking->viewMeeting();
	
	if(isset($_POST['book']))
	{
		$sid = $_POST['studentid'];
		$lname = $_POST['lecturername'];
		$time = $_POST['meetingtime'];
		$location = $_POST['locat'];
		$mstatus = "reserved";
		if($booking->booking($sid, $lname, $time, $location, $mstatus)){
			echo "<script> alert('Meeting is succesfully booked!')</script>";
		}
	else{
		echo "fail";
		}
		//$sid, $lname, $time, $location, $mstatus
	}
	

	
?>



<!DOCTYPE html>

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
</style>

	<html>
		<head>
			
			<title>Book Meeting</title>
		
		<style>
		
		table {
			position: relative;
			top: 100px;
			border: 1px solid white;
			border-collapse: collapse;
		}

		th, td {
			border: 1px solid white;
			border-collapse: collapse;
			padding: 5px;
			text-align: left;
		}
		
		.book {
			position: absolute;
			top: 50%;
			right: 49%;
		}
		</style>

		</head>

	<body>
	<center><h1>PLEASE FILL THIS FORM</h1></center>
	<form action="BookMeeting.php" method="post">
		
		
		<center>
		<table>

		
		<tr>
		<td> 
			<label for="meeting">Student ID</label>
			</td>
		<td>
			<input type="text" name="studentid" id="studentid" />
		</td>
		</tr>
		
		<tr> 
		
			<td> 
			<label for="meeting">Lecturer name</label>
			</td>		
						<td>
						<input type="text" name="lecturername" id="lecturername" />
						<!--select name="meeting" id="meeting">
								<option value="0">Frederic Hoffert</option>
								<option value="1">Samuel Mahatmaputra</option>
								<option value="2">Win Ce</option>
						
						</select-->	
						
			</td> 				
		</tr>

		<tr>
			<td>
					<label for="meetingtime">Time of Meeting</label>
					</td>
					<td>
					<input type="text" name="meetingtime" id="meetingtime" />
					
			</td>
		</tr>
						
		<tr>
			<td>
					<label for="locat">Location</label>
					</td>
					<td>
					<input type="text" name="locat" id="locat" />
					
			</td>
		</tr>
		
		
	</table>
			<button class="book" name = "book" type="submit">BOOK</button>
		</center>
		</form>
	</body>
</html>	
		
		
		
		
		
		
		
	
	



			