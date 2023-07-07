<?php
	$x=0;
	while ($x<10) 
	{
		if ($x==4)
		{
			break;
		}
		echo "the number is: $x <br/>";
		$x++;
	}
	echo "<br/>";
	$y=0;
	while ($y<=10) 
	{
		if ($y==4) 
		{
			$y++;
			continue;
		}
		echo "the number is: $y <br/>";
		$y++;
	}
?>