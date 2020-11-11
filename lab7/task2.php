<!DOCTYPE html>
<head>
	<title> Task 3</title>
</head>

<body>

	<h1>Task 2</h1>


<!-- EXERCISE 1 -->

<?php

	echo "1. ";

	$sum = 0;
	$x = 1;
	$n = 3;

	for($i = 1; $i <= $n; $i++){
		$sum = $sum + (pow($x, $i) / 2);
	}
	echo $sum . "<br>";

?>

<!-- EXERCISE 2 -->

<?php

	echo "2. ";

	$product = 1;
	$k = 1;
	$n = 2;
	$x = 1;

	do {
		$product = $product * (1 + ($k++ * $x) / 3 );
	} while ($k <= $n);

	echo $product . "<br>";

?>

</body>

</html>