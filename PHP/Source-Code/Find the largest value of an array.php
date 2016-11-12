Find the largest value of an Array in PHP<br><br>

<?php

	$myArray  = array(5, 6 , 7, -8, 6, 4);

	$maximum = $myArray[0];

	for($i = 1; $i<sizeof($myArray); $i++)
	{
		if($maximum<$myArray[$i])
			$maximum = $myArray[$i];
	}

	echo $maximum;

?>