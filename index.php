<?php
$servername = "localhost";
$username = "root";
$password = "";
$Dname = "Phonebook1";

$conn = new mysqli($servername, $username, $password, $Dname);

if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "ALTER TABLE contacts CHANGE ADRESS ADDRESS VARCHAR(50)";

?>