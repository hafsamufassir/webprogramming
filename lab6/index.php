<!DOCTYPE html>

<html>
<head>
	<title> Lab 6 </title>

</head>

<body>

	<hr>
	<h4> exercise 2 </h4>
	<form method="post">
	Farenheit: <input type="number" name="farenheit"><br>
	<input type="submit">
	</form> 

	<?php

	$f = $_POST["farenheit"];
	$c = (5/9) * ($f - 32);
	echo "$f Farenheits = $c Celcius <br/>";

	?>

	<hr>
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
	<h4> exercise 6 </h4>

	

	<hr>

	<h2>Part 2</h2>

	<h4> exercise 1 </h4>
	<form method="post">
	Variable: <input type="number" name="variable"><br>
	<input type="submit">
	</form> 

	<?php

	$variablex = $_POST["variable"];
	echo $variablex + 1;

	?>



</body>
</html>
