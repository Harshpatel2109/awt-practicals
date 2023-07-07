<?php 
	//array with key
	$array1 = array("a"=>50,"1"=>70,"A"=>30);
	print_r($array1);
	//array without key
	$array2 = array(50,10,40);
	echo "<br/>";
	print_r($array2);
	//array with brackets
	$array_brac = ["value1","value2","value 3"];
	echo "<br/>";
	print_r($array_brac);
	$mul = array(
			"1st" => array("1st_1st"=>50,"1st_2nd"=>60),
			"2nd" => array("2nd_1st"=>60,"2nd_2nd"=>array("sub1"=>1,"sub2"=>2))
			);
	echo "<br/>";
	print_r($mul);
	ksort($array1);
	rsort($array2);
	echo "<br/>";
	print_r($array1);
	echo "<br/>";
	print_r($array2);
?>