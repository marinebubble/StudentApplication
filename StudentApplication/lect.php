<!DOCTYPE html>
	<html>
		<head>
			
			<title>LECTURERS</title>
		
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
		
		right:120px;}
		
		#pict2{
		
		right:60px;}
		
		#pict4{
		
		left:60px;
		}
		
		#pict1, #pict2, #pict3, #pict4
		{
			position: relative;
			top: 100px;
		
		}
		
		#ak
		{
			top:100px;
			right:125px;
			position: relative;
			
			
		}
		
		#fh
		{
			top:100px;
			right:45px;
			position: relative;
		}
		
		#sm
		{
			top:100px;
			right:15px;
			position: relative;
		}
		
		#wn
		{
			top:100px;
			left:120px;
			position: relative;
		}
		</style>

		</head>

	<body>
		<center>
		
		<address>Currently, it is<br>
		<p id="demo"></p>

		<script>
		var d = new Date(); // for now
		var a = d.getHours(); // => 9
		var b = d.getMinutes(); // =>  30
		var c = d.getSeconds(); // => 51
		document.getElementById("demo").innerHTML = a + ":" + b + ":" + c;
			</script>	
			
		<table>
		<tr> 
			<td> 
			<a href="antonloc.php">
			<input id="pict1" type="image" src="lecturers/anton.jpg" height="200" width="200" value="anton" />
			</td> 
		
		<td>
		<a href="fredloc.php">
		<input id="pict2" type="image" src="lecturers/Frederic.png" height="200" width="200" value="Frederic" />
		</td>
		
		<td>
		<a href="samloc.php">
		<input id="pict3" type="image" src="lecturers/sam.jpg" height="200" width="200" value="sam" />
		</td> 
		
		<td>
		<a href="winceloc.php">
		<input id="pict4" type="image" src="lecturers/wince.jpg" height="200" width="200" value="wince" />
		</td> 
		</tr>
			
			<tr>
		<td><h2><a id="ak">Antonius Kurniawan</a></h2></td>
			
			
			<td>
			<h2><a id="fh">Frederic Hoffert</a></h2>
			</td>
			
			<td>
			<h2><a id="sm">Samuel Mahatmaputra</a></h2>
			</td>
			
			<td>
			<h2><a id="wn">Win Ce</a></h2>
			</td>
		</tr>
		
		</table>
		
		<?php 
		$fullname = "JASA RAME";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
		echo "<p>&copy;" .$fullname . " , ". date("Y")."</p>";
		?>
		
		</center>
	</body>
</html>
