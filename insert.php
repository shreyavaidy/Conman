<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO conuser (name, email, password, state, conference) VALUES ('$_POST[Name]', '$_POST[EMail]','$_POST[pwd1]', '$_POST[State]',' ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "CREATE TABLE $_POST[Name] (sno INT(10), conference VARCHAR(100), place CHAR(50), date DATE)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Table" .$_POST['Name']." created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>