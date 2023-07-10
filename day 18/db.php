<?php  
echo "Welcome to the page of database connectivity <br/>";
/*ways to connect the database
1. MySQLi connec
2. PDO
*/
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
?>  