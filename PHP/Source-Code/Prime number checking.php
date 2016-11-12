Prime Number checking program in PHP<br><br>

<?php

	$item = 11;

	$flag = true;

	for($i = 3; $i<sqrt($item); $i+=2)
	{
		if($item%$i==0)
		{
			$flag = false;
			break;
		}
	}

	if($item==0 || $item==1)
		$flag = false;

	if($flag)
		echo $item." is Prime";
	else
		echo $item." is not Prime";


?>