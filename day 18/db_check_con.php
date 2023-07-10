<?php

//connecting to the database
$servername="localhost";
$username="root";
$password="";

//create the connection
$con = mysqli_connect($servername,$username,$password);

// die if the connection was not successful
if(!$con){
    die("sorry we fail to connect".mysqli_connect_error());
}
else{
echo "<br/>connection was successful ";
}

//create the data base
$sql="create database db_books";
$result=mysqli_query($con,$sql);

//check data base creation success
if($result)
{
    echo "the database created successfully <br/> ";
}
else
{
    echo "the database is not created successfully because of the error !".mysqli_error($con);
}
?>