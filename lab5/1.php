<!DOCTYPE html>

<head>
<title>1</tile>
</head>

<body>

<?php

$sec = 5049;
$min = 0;
$hours = 0;

$hours = $sec/3600;
$min = ($sec - (3600*hours))/60;
$sec = min%60;

echo "hours: $hours,  minutes: $min, seconds: $sec";



?>

</body>

</html>