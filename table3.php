<?php
    $servername = "localhost";
    $username= "root";
    $pasword = "";
    $dbname ="kanvan";

    $conn = mysqli_connect($servername,$username,$pasword,$dbname);

    if(!$conn){
        die("connection failed:".mysqli_connect_error());    
    }


    $sql = "CREATE TABLE user(
    usernameEmail VARCHAR (30) NOT NULL,
    password VARCHAR (50) NOT NULL
   )";

    if(mysqli_query($conn,$sql)){
        echo "Table Create Suceefully..";
    }else{
        echo "Error Creating!".mysqli_error($conn);
    }

    mysqli_query($conn);
?>