<?php

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

	$sql="create database db_books";
	$result=mysqli_query($con,$sql);

	if($result)
	{
	    echo "the database created successfully <br/> ";
	}
	else
	{
	    echo "the database is not created successfully because of the error !".mysqli_error($con);
	}
?>