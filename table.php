<?php
    $servername = "localhost";
    $username= "root";
    $pasword = "";
    $dbname ="kanvan";

    $conn = mysqli_connect($servername,$username,$pasword,$dbname);

    if(!$conn){
        die("connection failed:".mysqli_connect_error());    
    }


    $sql = "CREATE TABLE clean(
    name VARCHAR (30) NOT NULL,
    email VARCHAR (50),
    subject VARCHAR (30),
    message VARCHAR (50)
   )";
    if(mysqli_query($conn,$sql)){
        echo "Table Create Suceefully..";
    }else{
        echo "Error Creating!".mysqli_error($conn);
    }

    mysqli_query($conn);
?>