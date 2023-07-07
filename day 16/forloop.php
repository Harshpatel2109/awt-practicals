<?php
	for ($x=1;$x<=5;$x++)
	{
		echo "The number is: $x <br/>";
	}
	echo "<br>";
	$colors=array("red","orange","yellow","green","blue");
	foreach ($colors as $value)
	{
		echo "$value <br>";
	}
	echo "<br>";
	$age = array("abc"=>18,"mno"=>19,"pqr"=>20,"xyz"=>21);
	foreach ($age as $a => $val)
	{
		echo "$a = $val <br/>";
	}
?>