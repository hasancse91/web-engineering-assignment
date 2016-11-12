Print the Fibonacci Series upto N-th item using PHP<br><br>

<?php
	
	function printFibonacci($n)
	{
		$a = 0;
		$b = 1;

		echo "0 1 ";
		for($i = 3; $i<=$n; $i++)
		{
			$c = $a + $b;
			$temp = $b;
			$b = $c;
			$a = $temp;

			echo $c." ";
		}

	}

	$number = 10;

	printFibonacci($number);

?>