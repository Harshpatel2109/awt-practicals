<?php

	echo "Welcome to the page of database connectivity <br/>";
	
	$servername="localhost";
	$username="root";
	$password="";

	$con = mysqli_connect($servername,$username,$password);
	if(!$con)
	{
	    die("sorry we fail to connect".mysqli_connect_error());
	}
	else
	{
		echo "<br/>connection was successful ";
	}
?>