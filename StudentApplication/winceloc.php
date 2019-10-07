<address>Currently, it is<br>
<p id="demo"></p>

<script>
var d = new Date(); // for now
var a = d.getHours(); // => 9
var b = d.getMinutes(); // =>  30
var c = d.getSeconds(); // => 51
document.getElementById("demo").innerHTML = a + ":" + b + ":" + c;
</script>					

<?php
date_default_timezone_set('Asia/Jakarta');
$currentTime = date("H");
echo "<br/>";
echo getTimeStatus($currentTime);
echo "<br/>";
echo "<br/>";
echo getLocationStatus($currentTime);
?>
					
<?php
function getTimeStatus($t) {
	if ($t > 7 && $t <= 9) {
		return "Location of your lecturer";
	}
	if ($t > 9 && $t <= 11) {
		return "Location of your lecturer";
	} 
	if ($t > 11 && $t <=13) {
		return "Lecturer refills energy";
	}
	if ($t > 13 && $t <= 15) {
		return "Location of your lecturer";
	}
	if ($t > 15 && $t <= 17) {
		return "Location of your lecturer";
	}
	return "Your lecturer probably taking a rest. Don't disturb";	
}
?>

<?php
function getLocationStatus($t) {
	if ($t > 7 && $t <= 9) {
		 echo "<img src='etc/Salinan office(2).png'>";
	} 
	elseif ($t > 9 && $t <=11) {
		 echo "<img src='etc/Salinan office(2).png'>";
	}
	elseif ($t > 11 && $t <= 13) {
		 echo "<img src='etc/Salinan Lunch time(2).png'>";
	}
	elseif ($t > 13 && $t <= 15) {
		 echo "<img src='lantai4/4th floor(1).png'>";
	}
	elseif ($t > 15 && $t <= 17) {
		 echo "<img src='lantai4/4th floor(1).png'>";
	}
	else {
		echo "<img src='etc/Salinan House(2).png'>";
	}
}
?>

