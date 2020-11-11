<!DOCTYPE html>

<html>
<head>
	<title> Lab 6 </title>

</head>

<body>

	<h2>Part 2</h2>

	<h4> exercise 3 </h4>
		<?php
		$limit = 32767;
	?>

	<h4>FOR loop</h4>
	<?php
		$first = 0;
		$second = 0;

		for ($third = 1; $third < $limit; $first = $second, $second = $third, $third = $first + $second) {
			echo "$third <br/>";
		}
	?>

	<hr>

	<h4>WHILE loop</h4>

	<?php
		$first = 0;
		$second = 0;
		$third = 1;

		while ($third < $limit) {
			echo "$third <br/>";

			$first = $second;
			$second = $third;
			$third = $first + $second;
		}
	?>


</body>
</html>
