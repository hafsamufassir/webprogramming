<!DOCTYPE html>

<html>
<head>
	<title> Lab 6 </title>

</head>

<body>

	<h4> exercise 3 </h4>
	<form method="post">
	Radius: <input type="number" name="radius"><br>
	<input type="submit">
	</form> 

	<?php

	$p = 3.14159;
	$radius = $_POST["radius"];
	$diameter = 2 * $radius;
	$circumference = 2 * $p * $radius;
	$area =  $p * pow($radius, 2);
	echo "The radius is $radius, the diameter is $diameter, the circumference is $circumference, the area is $area <br/>";

	?>

	<hr>

</body>
</html>
