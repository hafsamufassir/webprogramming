<!DOCTYPE html>
<head>
<titl> lab7, task3 </title>
</head>

<body>
	
	<h3>Task 3</h3>

<!-- EXERCISE 1 -->
<?php

	function ex1(array $array1){
		$sum = 0;
		$counter = 0;

		$sum = array_sum($array1);

		foreach ($array1 as $value) {

			if($value >  0){
				$counter++;
			}
			
		}

		echo "Sum of array = $sum <br>";
		echo "The number of positive values = $counter <br>";
	}

	echo "1. ";
	ex1(array(-1, -2, 1, 2, 3, 4, 5, 6, 7, 8));

?>

<hr>


<!-- EXERCISE 2 -->
<?php

	$min = 0;
	$max = 0;
	$min_position = 0;
	$max_position = 0;

	function ex2(array $array2){
		$min = min($array2);
		$min_position = array_search($min, $array2);
		echo "The minimum of array = $min, its position is $min_position <br>";

		$max = max($array2);
		$max_position = array_search($max, $array2);
		echo "The maximum of array = $max, its position is $max_position <br>";

	}

	echo "2. ";
	ex2(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));

?>

<hr>

<!-- EXERCISE 3 -->
<?php

	function ex3(array $array3){
		$min_oddpos = 0;
		$array_odd = array();

		for ($i = 0; $i < sizeof($array3); $i++){
			if($i % 2 == 0){
				unset($array3[$i]);
			}
		}

		$min_oddpos = min($array3);

	echo "The minimum among odd positions is $min_oddpos <br>";

	}

	echo "3. ";
	ex3(array(1, 2, 3, -4, -5, -7, 7, 8, 9, 10, 11, 12, 13, 14, 15));

?>

<hr>

<!-- EXERCISE 4 -->
<?php

	$min = 0;
	$max = 0;

	function ex4(array $array4){
		$sum = 0;
		$counter = 0;
		$min = min($array4);
		$max = max($array4);
		$min_pos = array_search($min, $array4);
		$max_pos = array_search($max, $array4);

		echo "min = $min, max = $max <br>";

		for ($i = $min_pos; $i < $max_pos; $i++){
			if($array4[$i] > 0){
				$sum += $array4[$i];
				$counter++;
			}
		}

		echo "The sum of positive elements between min and max is $sum <br>";
		echo "The number of positive elements is $counter <br>";

	}

	echo "4. ";
	ex4(array(9, 8, 7, 6, 5, 4, 3, 2, -1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 2, 3, 4, 5, 6, 7, 8, 9, 8, 8, 8, 8));

?>

<hr>

<!-- EXERCISE 5 -->
<?php

	function ex5(array $array5){
		$x = 0;
		$found = false;

		for($i = 0; $i < sizeof($array5); $i++){
			if($array5[$i] < 0){
				unset($array5[$i]);
			}
		}

		foreach($array5 as $val){
			if($val == 5){
				$x = array_sum($array5);
			}
		}

		echo "The x = $x <br>";
	}

	echo "5. ";
	ex5(array(1, 2, 3, 4, -1, -2, -3, -4, -5, -6, 1, 2, 3, 4, 5));

?>

<hr>

<!-- EXERCISE 6 -->
<?php

	function ex6(array $array6){
		$sum = 0;

		foreach($array6 as $val){
			if($val < 0){
				$sum = $sum + $val;
			}
		}

		echo "The sum of negative = $sum <br>";
	}

	echo "6. ";
	ex6(array(-1, -2, -3, -4, -5, -6, 1, 2, 3, 4, 5, 6));

?>

<hr>

<!-- EXERCISE 7 -->
<?php

	function ex7(array $array7){
		$max = 0;
		$max_pos = 0;

		foreach ($array7 as $position => $val){
			if($val > $max){
				$max = $val;
				$max_pos = $position;
			}
		}
		echo "The max value is: $max, its position is $max_pos <br>";
	}

	echo "7. ";
	ex7(array(1, 2, 3, 4, -1, -2, -3, -4, -5, -6, 1, 2, 3, 4, 5, 6, 7, 8, 10, 11));

?>

<hr>

<!-- EXERCISE 8 -->
<?php

	function ex8(array $array8){
		$min = 0;
		foreach ($array8 as $position => $value) {
			if($position % 2 == 0) {
				unset($array8[$position]);
			}
		$min = min($array8);
		}

	echo "The minimum among odd is $min <br>";

	}

	echo "8. ";

	ex8(array(1, 2, 3, -1, -2, -2, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18));

?>

<hr>

<!-- EXERCISE 9 -->
<?php

	function ex9(array $array9){
		$sum = 0;
		$counter = 0;
		$min = min($array9);
		$min_pos = array_search($min, $array9);
		$max = max($array9);
		$max_pos = array_search($max, $array9);

		for ($i = $min_pos; $i < $max_pos; $i++){
			if($array9[$i] > 0){
				$sum += $array9[$i];
				$counter++;
			}
		}

		echo "The sum of positive elements between minn and max is $sum, the number of positive elements is $counter <br>";
	}

	echo "9. ";
	ex9(array(1, -2, 3, 4, 5, 6, 7))

?>

<hr>

<!-- EXERCISE 10 -->
<?php

	function ex10(array $array10){
		$x = 0;

		foreach ($array10 as $position => $val) {
			if ($val < 0){
				unset($array10[$position]);
			}
		}

		foreach ($array10 as $position => $val) {
			if($val == 7){
				$x = array_sum($array10);
			}
		}

		echo "The sum of positive elements is $x <br>";
	}

	echo "10. ";
	ex10(array(1, -2, -3, 4, 5, -6, 7, 8, -9, -10, -11, -12, -13, -14));

?>

<hr>

<!-- EXERCISE 11 -->
<?php

	$min = 0;
	$max = 0;
	$min_position = 0;
	$max_position = 0;

	function ex11(array $array11){
		$min = min($array11);
		$min_position = array_search($min, $array11);
		echo "The minimum of array = $min, its position is $min_position <br>";

		$max = max($array11);
		$max_position = array_search($max, $array11);
		echo "The maximum of array = $max, its position is $max_position <br>";

	}

	echo "11. ";
	ex11(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));

?>

<hr>

<!-- EXERCISE 12 -->
<?php

	function ex12(array $array12){
		$max= 0;
		foreach ($array12 as $position => $value) {
			if($position % 2 == 0) {
				unset($array12[$position]);
			}
		$max = max($array12);
		}

	echo "The maximum among odd is $max <br>";

	}

	echo "12. ";

	ex12(array(1, 2, 3, -1, -2, -2, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16));

?>

<hr>

<?php

	// if(isset($_POST["numbers1"])){
	// 	echo "1. sum of numbers = " . array_sum($_POST['numbers1']) . ", ";
	// 	if($_POST["numbers1"] >= 0){
	// 		$counter++;
	// 		echo $counter;
	// 	}
	// }

?> 

<!-- <form action="task3.php" method="POST">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="number" name="numbers[]">
<input type="submit" value="submit"/>
</form> -->

</body>

</html>