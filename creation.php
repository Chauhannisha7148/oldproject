<?php
    $servername ="localhost";
    $username   ="root";
    $password   ="";

    $conn =mysqli_connect($servername,$username,$password);
    
    if(!$conn){
        die("Connection faile:".mysql_connect_error());
    }
    echo "Connection successfully";

?>