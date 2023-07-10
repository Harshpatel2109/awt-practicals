<?php 

//connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="vag1_db";

//create the connection
$con = mysqli_connect($servername,$username,$password,$database);

// die if the connection was not successful
if(!$con){
    die("sorry we fail to connect".mysqli_connect_error());
}
else{
echo "<br/>connection was successful ";
}
//create a table in db
$sql="CREATE TABLE `5semstudents` (`Sr_No` INT(10) NOT NULL , `S_Name` VARCHAR(15) NOT NULL , 
`S_Cnt_no` INT(10) NOT NULL , PRIMARY KEY (`Sr_No`)) ";
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