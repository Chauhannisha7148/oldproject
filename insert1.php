<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kanvan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["usernameEmail"];
    $password = $_POST["password"];
    

    $sql = "INSERT INTO clean(username,password) VALUES ('$usernameEmail', '$password')";
    
    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
