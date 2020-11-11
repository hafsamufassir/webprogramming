<!DOCTYPE html>

<html>
<head>
	<title> Lab 6 </title>

</head>

<body>

	<h4> exercise 5 </h4>
	<form method="post">
	Seconds: <input type="number" name="seconds"><br>
	<input type="submit">
	</form> 

	<?php

	$sec = $_POST["seconds"];
	$hours = (int) ($sec / 3600);
	$minutes = (int) (($sec - (3600 * $hours)) / 60);
	$seconds = ($sec - (3600 * $hours) - ($minutes * 60));
	echo "$sec = H:$hours M:$minutes S:$seconds";

	?>

	<hr>

</body>
</html>
