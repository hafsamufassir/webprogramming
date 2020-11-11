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

</body>
</html>
