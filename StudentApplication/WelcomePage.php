
<!DOCTYPE html>
<html>
	<head>
		<title> Welcome Page </title>
	</head>
	
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
		h1
		{
			text-align: center;
		}
	
		#lecturer, #student
		{
			font-size: 14;
			position: relative;
			left: 60px;
		}
		
	</style>
	
	<body>
		<h1>WELCOME TO OUR WEBSITE</h1>
		<br/>
		
		<center>
			<h2>Login as a</h2>
			<br/>
		</center>
		
		<center>
		<table>
		<tr>
			<td><img src="lecturer.png" height="300" width="200"> </td>
			<td><img src="student.png" height="300" width="200"></td>
		</tr>
		<tr>
			<td> <a href="LectLogin.php"><button id="lecturer" width="100px">Lecturer</button></a> </td>
			<td> <a href="StudentLoginForm.php"><button id="student">Student</button></a> </td>
		</tr>
		</table>
		<?php 
		$fullname = "JASA RAME";
	
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<p>&copy;" .$fullname . " , ". date("Y")."</p>";
		?>
		</center>

		
	</body>
	
</html>

