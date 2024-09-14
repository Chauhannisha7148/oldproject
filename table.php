<?php
$servername ="localhost";
$username ="root";
$password  ="";
$dbname ="Student";
$conn =mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed:".mysqli_connect_errno());
}

$sql  ="CREATE TABLE  user(
name VARCHAR(30) Not Null,
father VARCHAR(30) Not Null,
phone VARCHAR(10) Not Null,
email VARCHAR(40)
)";

if(mysqli_query($conn,$sql)){
    echo "create table successfully";
}else{
    echo "Error ! creating:".mysqli_error($conn);
}
mysqli_close($conn);
?>