<?php
	$a=array(1,2,3,4,5);
	$b=array(6,7,8,9,10);
	echo "First array: ";
	print_r($a);
	echo "<br>Second array: ";
	Print_r($b);
	$ans = array_merge($a,$b);
	echo "<br><br>After Merging: ";
	echo"<pre>";
	print_r($ans);
?>