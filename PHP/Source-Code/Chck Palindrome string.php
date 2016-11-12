Chck Palindrome string using PHP<br><br>

<?php

	$myString = "madam";

	
	if ($myString == strrev($myString))
	    echo 'String \''.$myString.'\' is a palindrome';
	else
	    echo 'String \''.$myString.'\' is not a palindrome';
	
?>