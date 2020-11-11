<!DOCTYPE html>

<html>
<head>
	<title> Lab 5 </title>

</head>

<body>

	<?php

	echo "<h4> exercise 1 </h4>";

	$x1 = 7 + 3 * 6 / 2 - 1;
	echo "1. 7 + 3 * 6 / 2 - 1 = " . $x1 . "<br/>";

	$x2 = (3 *9*(3+(4*5/3)));
	echo "2. (3 *9*(3+(4*5/3))) = " . $x2 . "<br/>";

	$x3 = 12.0 + 2 / 5 * 10.0; 
	echo "3. 12.0 + 2 / 5 * 10.0 = " . $x3 . "<br/>";

	$x4 = 2 / 5 + 10.0 * 3 - 2.5; 
	echo "4. x=2/5+10.0*3-2.5 = " . $x4 . "<br/> <hr>"; 


	echo "<h4> exercise 2 </h4>";
	$f = 32;
	$c = (5/9) * ($f - 32);
	echo "$f Farenheits = $c Celcius <br/> <hr>";


	echo "<h4> exercise 3 </h4>";
	$p = 3.14;
	$radius = 2;
	$diameter = 2 * $radius;
	$circumference = 2 * $p * $radius;
	$area =  $p * pow($radius, 2);
	echo "The radius is $radius, the diameter is $diameter, the circumference is $circumference, the area is $area <br/> <hr>";


	echo "<h4> exercise 4 </h4>";
	$point1x = 4;
	$point1y = 0;
	$point2x = 6;
	$point2y = 2;
	$distance =  sqrt(pow($point2x - $point1x, 2) + pow($point2y - $point1y, 2));
	echo "the distance equal to $distance <br/> <hr>";


	echo "<h4> exercise 5 </h4>";
	$sec = 5049;
	$hours = (int) ($sec / 3600);
	$minutes = (int) (($sec - (3600 * $hours)) / 60);
	$seconds = ($sec - (3600 * $hours) - ($minutes * 60));
	echo "$sec = H: $hours M: $minutes S: $seconds <hr>";


	echo "<h4> exercise 6 </h4>";

	$max = 100;
	$price = 45;

	echo "Maximum is $max cent <br/>";
	echo "The price is $price cent <br/>";

	$change = $max - $price;

	echo "Change is equal to $change <br/>";

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


</body>
</html>
