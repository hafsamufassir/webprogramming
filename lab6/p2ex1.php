<!DOCTYPE html>

<html>
<head>
	<title> Lab 6 </title>

</head>

<body>

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
