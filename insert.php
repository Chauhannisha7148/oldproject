<?php
$servername ="localhost";
$username ="root";
$password  ="";
$dbname ="student";
$conn =mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed:".mysqli_connect_errno());
}

$sql = "INSERT INTO user(name,father,phone, email)
 VALUES('Aman','Ram kumar','7869876589','aman12@gmail.com')";


if(mysqli_query($conn,$sql)){
    echo "insert table successfully";
}else{
    echo "Error ! inserting:".mysqli_error($conn);
}
mysqli_close($conn);
?>