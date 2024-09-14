<?php
    $servername = "localhost";
    $username= "root";
    $pasword = "";
    $dbname ="kanvan";

    $conn = mysqli_connect($servername,$username,$pasword,$dbname);

    if(!$conn){
        die("connection failed:".mysqli_connect_error());    
    }


    $sql = "CREATE TABLE reads(
    name VARCHAR (30) NOT NULL,
    comment VARCHAR (50),
    email VARCHAR (50),
    website VARCHAR (30)
   )";

    if(mysqli_query($conn,$sql)){
        echo "Table Create Suceefully..";
    }else{
        echo "Error Creating!".mysqli_error($conn);
    }

    mysqli_query($conn);
?>