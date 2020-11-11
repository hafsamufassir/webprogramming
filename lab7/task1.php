<!DOCTYPE html>
<html>
<head>
<titl> lab7, task1 </title>
</head>

<body>
	
	<h3>Task 1</h3>

	<form action = "task1.php" method = "post"> 
		x : <input type="number" name="var"> <br>
		<input type="submit">
	</form>


<?php

$x = $_POST["var"];
echo "<h3> x = $x </h3> ";

echo "1. ";

$x1 = $_POST["var"];
$function1 = 0;

if ($x1 > -2 && $x1 < 5) {
	$function1 = 5 * pow($x1, 2) + 6;
	echo "f(x) = $function1 <br>"; 
} elseif ($x1 >= 5) {
	$function1 = pow($x1, 3) + 7;
	echo "f(x) = $function1  <br>";
} else {
	echo "x is not in the range of the function <br>";
}

echo  "2. ";

$x2 = $_POST["var"];
$function2 = 0;


if($x2 >= 0){
	$function2 = 5 * $x2;
	echo "f(x) = $function2  <br>";
} elseif($x2 > -3 && $x2 < 0){
	$function2 = 3 * pow($x2, 4) + 9;
	echo "f(x) = $function2  <br>";

} else{
	echo "x is not in the range of the function <br>";
}

echo  "3. ";

$x3 = $_POST["var"];
$funtion3 = 0;

if($x3 < 1.5){
	$function3 = $x3;
	echo "f(x) = $function3 <br>";
} elseif($x3 >= 1.5 && $x3 < 2.5){
	$function3 = pow($x3, 3) + $x3;
	echo "f(x) = $function3 <br>";
} elseif($x3 > 2.5){
	$function3 = 3 * pow($x3, 3) + 5;
	echo "f(x) = $function3 <br>";
} else{
	echo "x is not in the range of the function <br>";
}

echo  "4. ";

$x4 = $_POST["var"];
$function4 = 0;


if($x4 < 1.22){
	$function4 = $x4;
	echo "f(x) = $function4  <br>";
} elseif($x4 > 1.22){
	$function4 = 5 * pow($x4, 3) + 1.7;
	echo "f(x) = $function4  <br>";
} else{
	echo "x is not in the range of the function <br>";
}

echo  "5. ";

$x5 = $_POST["var"];
$funtion5 = 0;

if($x5 > 0 && $x5 < 2){
	$function5 = pow($x5, 3);
	echo "f(x) = $function5 <br>";
} elseif($x5 >= 2){
	$function5 = 3 * pow($x5, 4) + 7;
	echo "f(x) = $function5 <br>";
} elseif($x5 > 5 && $x5 <= 9){
	$function5 = $x5;
	echo "f(x) = $function5 <br>";
} else{
	echo "x is not in the range of the function <br>";
}

echo  "6. ";

$x6 = $_POST["var"];
$funtion6 = 0;

if($x6 < 1.5){
	$function6 = $x6;
	echo "f(x) = $function6 <br>";
} elseif($x6 >= 1.5 && $x6 < 2.5){
	$function6 = pow($x6, 3);
	echo "f(x) = $function6 <br>";
} elseif($x6 >= 2.5){
	$function6 = 3 * pow($x6, 3) + 5;
	echo "f(x) = $function6 <br>";
} else{
	echo "x is not in the range of the function <br>";
}

?>

</body>

</html>