<!DOCTYPE html>

<html>
<head>
	<title> Lab 6 </title>

</head>

<body>

	<h2>Part 2</h2>

	<h4> exercise 3 </h4>
	<form method="post">
	Variable1: <input type="number" name="variable1"><br>
	Variable2: <input type="number" name="variable2"><br>
	Variable3: <input type="number" name="variable3"><br>
	Variable4: <input type="number" name="variable4"><br>
	Variable5: <input type="number" name="variable5"><br>
	Variable6: <input type="number" name="variable6"><br>
	Variable7: <input type="number" name="variable7"><br>
	Variable8: <input type="number" name="variable8"><br>
	Variable9: <input type="number" name="variable9"><br>
	Variable10: <input type="number" name="variable10"><br>
	<input type="submit">
	</form> 

	<?php

	$variable1 = $_POST["variable1"];
	$variable2 = $_POST["variable2"];
	$variable3 = $_POST["variable3"];
	$variable4 = $_POST["variable4"];
	$variable5 = $_POST["variable5"];
	$variable6 = $_POST["variable6"];
	$variable7 = $_POST["variable7"];
	$variable8 = $_POST["variable8"];
	$variable9 = $_POST["variable9"];
	$variable10 = $_POST["variable10"];
	echo "Maximum is: " . max($variable1, $variable2, $variable3, $variable4, $variable5, $variable6, $variable7, $variable8, $variable9, $variable10);

	?>

</body>
</html>
