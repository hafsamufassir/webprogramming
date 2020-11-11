<!DOCTYPE html>
<head>
<title> lab </title>
</head>

<body>
	
<?php

	function maximum(array $array){
		$max = 0;
		foreach($array as $val){
			if($val > $max){
				$max = $val;
			}
		}

		echo "$max <br>";
	}

	maximum(array(1, 2, 3, 4, 5));

?>

</body>

</html>