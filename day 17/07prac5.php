<?php
	echo "The original array is:<br>";
	$a=array("XYZ"=>"12","PQR"=>"20","MNO"=>"15","ABC"=>"23");
	echo "<pre>";
	print_r($a);
	echo "After sorting..<br>";
	ksort($a);
	echo "<pre>";
	Print_r($a);
?>