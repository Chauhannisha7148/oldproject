<?php
$servername ="localhost";
$username ="root";
$password  ="";

$conn =mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Connection failed:".mysqli_connect_errno());
}

$sql  ="CREATE DATABASE  Student";

if(mysqli_query($conn,$sql)){
    echo "create database successfully";
}else{
    echo "Error ! creating:".mysqli_error($conn);
}
mysqli_close($conn);
?>