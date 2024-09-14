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
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $project = $_POST["project"];
    $message = $_POST["message"];

    $sql = "INSERT INTO zaksta (name,phone, email, project, message) VALUES ('$name','phone', '$email', '$project', '$message')";
    
    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
