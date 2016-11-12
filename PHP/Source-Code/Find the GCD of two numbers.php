Find the GCD of two numbers using PHP<br><br>

<?php

	//Recursive function to find GCD
	function findGCD($a, $b)
	{
		if($b==0)
			return $a;

		return findGCD($b, $a % $b);
	}

	$num1 = 4;
	$num2 = 14;

	echo "GCD of ".$num1." and ".$num2." is: ".findGCD($num1, $num2);

?>