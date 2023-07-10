<?php
	echo "Welcome to the page of database connectivity <br/>";
	
	$servername="localhost";
	$username="root";
	$password="";
	$database="db_books";

	$con = mysqli_connect($servername,$username,$password,$database);
	if(!$con)
	{
	    die("sorry we fail to connect".mysqli_connect_error());
	}
	else
	{
		echo "<br/>connection was successful ";
	}

	$sql="CREATE TABLE `db_books`.`b_table` (`name` INT NOT NULL , `contact` INT NOT NULL , `email` INT NOT NULL , `password` INT NOT NULL ) ENGINE = InnoDB;";
	$result=mysqli_query($con,$sql);

	//check table creation success
	if($result)
	{
	    echo "the table created successfully <br/> ";
	}
	else
	{
	    echo "the table is not created successfully because of the error !".mysqli_error($con);
	}
?>