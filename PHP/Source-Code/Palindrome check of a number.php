Palindrome check of a number using PHP<br><br>

<?php

	function isPalindrome($n)
	{
		$temp = $n;
		$reverseNumber = 0;

		while ($temp>0) {
			$reverseNumber = $reverseNumber * 10 + ($temp % 10);
			$temp = (int) ($temp / 10);			
		}

		if($reverseNumber==$n)
			echo $n." is a Palindrome number";
		else
			echo $n." is not a Palindrome number";
	}

	
	$myNumber = 1221;

	isPalindrome($myNumber);

?>