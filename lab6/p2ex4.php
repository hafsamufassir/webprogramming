<!DOCTYPE html>

<html>
<head>
	<title> Lab 6 </title>

</head>

<body>

	<h2>Part 2</h2>

	<h4> exercise 4 </h4>

	<form method="post">
		<input type="number" name="first">
		<select name="operator">
			<option selected="selected" value="+"> + </option>
			<option value="-"> - </option>
			<option value="*"> * </option>
			<option value="/"> / </option>
			<option value="%"> % </option>
		</select>
		<input type="number" name="second">
		<input type="submit">
	</form>


	<?php
		if (isset($_POST["first"])) {
			$first = $_POST["first"];
		}
		else {
			$first = 0;
		}

		if (isset($_POST["operator"])) {
			$operator = $_POST["operator"];
		}
		else {
			$operator = "+";
		}

		if (isset($_POST["second"])) {
			$second = $_POST["second"];
		}
		else {
			$second = 0;
		}

		

		switch ($operator) {
			case '+':
				print $first + $second;
				break;
			case '-':
				print $first - $second;
				break;
			case '*':
				print $first * $second;
				break;
			case '/':
				if ($second != 0) {
					print $first / $second;
				}
				else {
					print "ERROR: CAN'T DIVIDE BY 0";
				}
				break;
			case '%':
				if ($second != 0) {
					print $first % $second;
				}
				else {
					print "ERROR: CAN'T DIVIDE BY 0";
				}
				break;
			default:
				print $first + $second;
				break;
		}
	?>



</body>
</html>
