<!DOCTYPE html>

<html>
<head>
	<title> Lab 6 </title>

</head>

<body>

	<h4> exercise 6 </h4>
	<form method="post">
	Inserted Amount: <input type="number" name="inserted"><br>
	Cost: <input type="number" name="cost"><br>
	<input type="submit">
	</form> 

	<?php

	$max = $_POST["inserted"];
	$price = $_POST["cost"];

	echo "The inserted amount is <b> $max </b> cent <br/>";
	echo "The cost is <b> $price </b> cent <br/>";

	echo "<hr>";

	$change = $max - $price;

	// echo "Change is equal to $change <br/>";

	$fifty_cents = (int) ($change / 50);
	$change = $change % 50;

	$twenty_cents = (int) ($change / 20);
	$change = $change % 20;

	$ten_cents = (int) ($change / 10);
	$change = $change % 10;

	$five_cents = (int) ($change / 5);
	$change = $change % 5;

	$two_cents = (int) ($change / 2);
	$change = $change % 2;

	$one_cent = (int) ($change / 1);
	$change = $change % 1;

	echo "Number of 50 cent coins is $fifty_cents <br/>
	Number of 20 cent coins is $twenty_cents <br/>
	Number of 10 cent coins is $ten_cents <br/>
	Number of 5 cent coins is $five_cents <br/>
	Number of 2 cent coins is $two_cents <br/>
	Number of 1 cent coins is $one_cent <br/>";

	?>

	<hr>

</body>
</html>
