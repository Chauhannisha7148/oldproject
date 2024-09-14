<?php
    
    $servername ="localhost";
    $username = "root";
    $password = "";
    $dbname = "student";
   
    $conn =  mysqli_connect($servername,$username,$password,$dbname);
   
    if(!$conn){
       die("Connectio failed :".mysqli_connect_error());
    }

    // SQL query to selecting all records

    $sql = "SELECT father, phone,email from user Where name='Ram'";
    $stmt = mysqli_query($conn,$sql);

    if(mysqli_num_rows($stmt)>0){
        while($row = mysqli_fetch_assoc($stmt)){
            //echo "<b>Id</b>".$row["id"].",<b>Name</b>".$row["stname"].",<b>Email</b>".$row["email"].",<b>Mobile</b>".$row["mobile"]."<br>";

            echo "<b>Name:</b>".$row["name"]. ", <b>Fathername:</b>" .$row["father"].", <b>Phone:</b>" .$row["phone"].", <b>Email:</b>" .$row["email"]."<br>";
        }
    }else{
            echo "no record found";    
        }
    
?>