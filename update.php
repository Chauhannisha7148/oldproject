<?php
 $servername ="localhost";
 $username = "root";
 $password = "";
 $dbname = "student";

 $conn =  mysqli_connect($servername,$username,$password,$dbname);

 if(!$conn){
    die("Connectio failed :".mysqli_connect_error());
 }

 //SQL query create to inert data in teachers table.
$sql ="UPDATE user SET name='Anshika' ,father='Rakesh' Where phone='7869876589'";
 
 if(mysqli_query($conn,$sql)){
    echo "update successfully";
 }else{
    echo "Error: .$sql.<br>. mysqli_error($conn)";
 }
 mysqli_close($conn);
?>